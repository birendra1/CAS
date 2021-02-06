<!DOCTYPE html>
<html>
<head>
  <title>Authority Register</title>
  <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}
</style>


  <script type="text/javascript">
    function validation(){
  
 
  var name = document.getElementById("name").value;
  var address = document.getElementById("address").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;
  var hints = document.getElementById("hints").value;
  var check = document.getElementById("check").value;
  var aadhar=document.getElementById("aadhar").value;
  var pincode = document.getElementById("pincode").value;


  var namecheck = /^[a-zA-Z]+(([',. ][a-zA-Z ])?[a-zA-Z]*)*$/;

  var addresscheck = /^[a-zA-Z0-9]+(([',. /-\][a-zA-Z0-9 ])?[a-zA-Z0-9/.,]*)*$/;

  
 // password should contain upper letter , one lower letter , one number , one sysmol and at least 8 character
  var passwordcheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

  // indian number starts with 6,7,8,9 and contains 10 number

  var numbercheck = /^[6789][0-9]{9}$/;
  var aadharcheck=/^[0-9]{12}$/;


  var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;



      if(namecheck.test(name)){
    document.getElementById("nameerror").innerHTML = " ";
  }
  else{
    document.getElementById("nameerror").innerHTML = "** User name is Invalid ";
    document.getElementById("name").focus();
    return false;  }

    if(emailcheck.test(email)){
    document.getElementById("emailerror").innerHTML = " ";
  }


  else{
    document.getElementById("emailerror").innerHTML = "** Email address is Invalid ";
    document.getElementById("email").focus();
    return false;

  }

       if(numbercheck.test(phone)){
    document.getElementById("phonenumerror").innerHTML = " ";
  }


  else{
    document.getElementById("phonenumerror").innerHTML = "** Phone number is Invalid ";
    document.getElementById("phone").focus();
    return false;

  }


    if(aadharcheck.test(aadhar)){
    document.getElementById("aadharerror").innerHTML = " ";
  }


  else{
    document.getElementById("aadharerror").innerHTML = "** Aadhar number is Invalid ";
    document.getElementById("aadhar").focus();
    return false;

  }


    if(pincode.length === 6){
    document.getElementById("addresserror").innerHTML = " ";
  }
  else{
    document.getElementById("addresserror").innerHTML = "** pincode  is Invalid ";
    document.getElementById("pincode").focus();
    return false;

  }



    if(addresscheck.test(address)){
    document.getElementById("addresserror").innerHTML = " ";
  }
  else{
    document.getElementById("addresserror").innerHTML = "** Address field is Invalid ";
    document.getElementById("address").focus();
    return false;

  }



    if(passwordcheck.test(password)){
    document.getElementById("passworderror").innerHTML = " ";
  }
  else{
    document.getElementById("passworderror").innerHTML = "** Password is Invalid should contain at least 1 uppercase letter , 1 lowercase letter ,1 number and 1 special symbol and greater than 8 character";
    document.getElementById("password").focus();
    return false;

  }


if(password == cpassword)
{
   document.getElementById("cpassworderror").innerHTML = "";
  
}

else

{
   document.getElementById("cpassworderror").innerHTML = "Password doesnot match";
   document.getElementById("cpassword").focus();
   return false;
}



    if(addresscheck.test(hints)){
    document.getElementById("hintanserror").innerHTML = " ";
  }
  else{
    document.getElementById("hintanserror").innerHTML = "** Hints  field is Invalid ";
    document.getElementById("hints").focus();
    return false;

  }
}



// State and corresponding District Name


    var state_arr = new Array( "Andhra Pradesh ","Arunachal Pradesh "," Assam",  "Bihar "," Chandigarh", "Chhattisgarh", "Dadra & Nagar Haveli", "Daman & Diu ","Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir ","Jharkhand ","Karnataka ","Kerala", "Lakshadweep ","Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya ","Mizoram ","Nagaland ","Orissa", "Pondicherry ","Punjab ","Rajasthan", "Sikkim ","Tamil Nadu","Telangana", "Tripura ","Uttar Pradesh ","Uttaranchal ","West Bengal");

var s_a = new Array();
s_a[0]="";
s_a[1]=" Anantapur|Chittoor| East Godavari| Guntur| Krishna|Kurnool|Nellore|Prakasam|Srikakulam|Visakhapatnam|Vizianagaram|West Godavari|YSR Kadapa|";

s_a[2] = " Tawang|West Kameng|East Kameng|Papum Pare|Kurung Kumey|Kra Daadi|Lower Subansiri|Upper Subansiri|West Siang|East Siang|Siang|Upper Siang|Lower Siang|Lower Dibang Valley|Dibang Valley|Anjaw|Lohit|Namsai|Changlang|Tirap|Longding";

s_a[3]="Tawang | West Kameng | East Kameng | Papum Pare | Kurung Kumey | Kra Daadi |   Lower Subansiri | Upper Subansiri | West Siang | East Siang |  Siang | Upper Siang | Lower Siang | Lower Dibang Valley | Dibang Valley | Anjaw | Lohit | Namsai | Changlang | Tirap | Longding" ;

s_a[4]=" Baksa | Barpeta | Biswanath | Bongaigaon | Cachar | Charaideo | Chirang | Darrang | Dhemaji | Dhubri | Dibrugarh | Goalpara | Golaghat |  Hailakandi | Hojai | Jorhat |  Kamrup Metropolitan | Kamrup | Karbi Anglong | Karimganj | Kokrajhar | Lakhimpur | Majuli | Morigaon | Nagaon | Nalbari | Dima Hasao | Sivasagar | Sonitpur | South Salmara-Mankachar | Tinsukia | Udalguri | West Karbi Anglong";

s_a[5]="Araria |Arwal|Aurangabad|Banka|Begusarai|Bhagalpur|Bhojpur|Buxar|Darbhanga|East Champaran (Motihari)|Gaya|Gopalganj|Jamui|Jehanabad|Kaimur (habua)|Katihar|Khagaria|Kishanganj|Lakhisarai|Madhepura|Madhubani|Munger (Monghyr)|Muzaffarpur|Nalanda|Nawada|Patna|Purnia (Purnea)|Rohtas|Saharsa|Samastipur|Saran|Sheikhpura|Sheohar|Sitamarhi|Siwan|Supaul|Vaishali|West Champaran";

s_a[6]=" Chandigarh ";

s_a[7]="Dadra & Nagar Haveli";



s_a[8]="Daman | diu";

s_a[9]="  Central Delhi|East Delhi| New Delhi| North Delhi| North East  Delhi| North West  Delhi| Shahdara| South Delhi| South East Delhi| South West  Delhi| West Delhi";

s_a[10]="North Goa | South Goa";


s_a[11]=" Ahmedabad | Amreli| Anand| Aravalli| Banaskantha (Palanpur)| Bharuch| Bhavnagar| Botad| Chhota Udepur| Dahod| Dangs (Ahwa)| Devbhoomi warka| Gandhinagar| Gir Somnath| Jamnagar| Junagadh| Kachchh| Kheda (Nadiad)| Mahisagar| Mehsana| Morbi| Narmada (Rajpipla)| Navsari| Panchmahal (Godhra)| Patan| Porbandar| Rajkot| Sabarkantha (Himmatnagar)| Surat| Surendranagar| Tapi (Vyara)| Vadodara| Valsad";

s_a[12]=" Ambala| Bhiwani| Charkhi Dadri| Faridabad| Fatehabad| Gurgaon| Hisar| Jhajjar| Jind| Kaithal| Karnal| Kurukshetra| Mahendragarh| Mewat| Palwal| Panchkula| Panipat| Rewari| Rohtak| Sirsa| Sonipat| Yamunanagar" ;


s_a[13]=" Bilaspur| Chamba| Hamirpur| Kangra| Kinnaur| Kullu| Lahaul &amp; Spiti| Mandi| Shimla| Sirmaur (Sirmour)| Solan| Una";

s_a[14]=" Anantnag|Bandipore|Baramulla|Budgam|Doda|Ganderbal|Jammu|Kargil|Kathua|Kishtwar|Kulgam|Kupwara|Leh|Poonch|Pulwama|Rajouri|Ramban|Reasi|Samba|Shopian|Srinagar|Udhampur";


s_a[15]="Bokaro |Chatra|Deoghar|Dhanbad|Dumka|East Singhbhum|Garhwa|Giridih|Godda|Gumla|Hazaribag|Jamtara|Khunti|Koderma|Latehar|Lohardaga|Pakur|Palamu|Ramgarh|Ranchi|Sahibganj|Seraikela-Kharsawan|Simdega|West Singhbhum";

s_a[16]="  Bagalkot|Ballari (Bellary)|Belagavi (Belgaum)|Bengaluru (Bangalore) Rural|Bengaluru (Bangalore) Urban|Bidar|Chamarajanagar|Chikballapur|Chikkamagaluru (Chikmagalur)|Chitradurga|Dakshina Kannada|Davangere|Dharwad|Gadag|Hassan|Haveri|Kalaburagi Gulbarga)|Kodagu|Kolar|Koppal|Mandya|Mysuru (Mysore)|Raichur|Ramanagara|Shivamogga (Shimoga)|Tumakuru (Tumkur)|Udupi|Uttara Kannada (Karwar)|Vijayapura (Bijapur)|Yadgir";

s_a[17]=" Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|Kozhikode|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad";


s_a[18]=" Agatti|Amini|Androth|Bithra|Chethlath|Kavaratti|Kadmath|Kalpeni|Kilthan|Minicoy";

s_a[19]="   Agar Malwa|Alirajpur|Anuppur|Ashoknagar|Balaghat|Barwani|Betul|Bhind|Bhopal|Burhanpur|Chhatarpur|Chhindwara|Damoh|Datia|Dewas|Dhar|Dindori|Guna|Gwalior|Harda|Hoshangabad|Indore|Jabalpur|Jhabua|Katni|Khandwa|Khargone|Mandla|Mandsaur|Morena|Narsinghpur|Neemuch|Panna|Raisen|Rajgarh|Ratlam|Rewa|Sagar|Satna|Sehore|Seoni|Shahdol|Shajapur|Sheopur|Shivpuri|Sidhi|Singrauli|Tikamgarh|Ujjain|Umaria|Vidisha" ;


s_a[20]=" Ahmednagar|Akola|Amravati|Aurangabad|Beed|Bhandara|Buldhana|Chandrapur|Dhule|Gadchiroli|Gondia|Hingoli|Jalgaon|Jalna|Kolhapur|Latur|Mumbai ity|Mumbai Suburban|Nagpur|Nanded|Nandurbar|Nashik|Osmanabad|Palghar|Parbhani|Pune|Raigad|Ratnagiri|Sangli|Satara|Sindhudurg|Solapur|Thane|Wardha|Washim|Yavatmal";


s_a[21]=" Bishnupur |Chandel |Churachandpur |Imphal East |Imphal West |Jiribam |Kakching |Kamjong |Kangpokpi |Noney |Pherzawl |Senapati |Tamenglong |Tengnoupal |Thoubal |Ukhrul";

s_a[22]=" East Garo Hills  |East Jaintia Hills  |East Khasi Hills  |North Garo Hills  |Ri Bhoi  |South Garo Hills  |South West Garo Hills   |South est Khasi Hills  |West Garo Hills  |West Jaintia Hills  |West Khasi Hills";

s_a[23]=" Aizawl |Champhai |Kolasib |Lawngtlai |Lunglei |Mamit |Saiha |Serchhip" ;

s_a[24]=" Dimapur |Kiphire |Kohima |Longleng |Mokokchung |Mon |Peren |Phek |Tuensang |Wokha |Zunheboto";


s_a[25]="  Angul |Balangir |Balasore |Bargarh |Bhadrak |Boudh |Cuttack |Deogarh |Dhenkanal |Gajapati |Ganjam |Jagatsinghapur |Jajpur |Jharsuguda |Kalahandi |Kandhamal |Kendrapara |Kendujhar (Keonjhar) |Khordha |Koraput |Malkangiri |Mayurbhanj |Nabarangpur |Nayagarh |Nuapada |Puri |Rayagada |Sambalpur |Sonepur |Sundargarh";

s_a[26]=" Karaikal | Mahe | Pondicherry | Yanam";


s_a[27]="  Amritsar | Barnala | Bathinda | Faridkot | Fatehgarh Sahib | Fazilka| Ferozepur | Gurdaspur | Hoshiarpur | Jalandhar | Kapurthala | udhiana | Mansa | Moga | Muktsar | Nawanshahr (Shahid Bhagat Singh Nagar) | Pathankot | Patiala | Rupnagar | Sahibzada Ajit Singh Nagar (Mohali) | Sangrur | Tarn Taran";


s_a[28]=" Ajmer |Alwar |Banswara |Baran |Barmer |Bharatpur |Bhilwara |Bikaner |Bundi |Chittorgarh |Churu |Dausa |Dholpur |Dungarpur |Hanumangarh |Jaipur |Jaisalmer |Jalore |Jhalawar |Jhunjhunu |Jodhpur |Karauli |Kota |Nagaur |Pali |Pratapgarh |Rajsamand |Sawai Madhopur |Sikar |Sirohi |Sri anganagar |Tonk |Udaipur";


s_a[29]=" East Sikkim  | North Sikkim  | South Sikkim  | West Sikkim";


s_a[30]=" Ariyalur  | Chennai  | Coimbatore  | Cuddalore  | Dharmapuri  | Dindigul  | Erode  | Kanchipuram  | Kanyakumari  | Karur  | Krishnagiri  | adurai  | Nagapattinam  | Namakkal  | Nilgiris  | Perambalur  | Pudukkottai  | Ramanathapuram  | Salem  | Sivaganga  | Thanjavur  | Theni  | Thoothukudi (Tuticorin)  | Tiruchirappalli  | Tirunelveli  | Tiruppur  | Tiruvallur  | Tiruvannamalai  | Tiruvarur  | Vellore  | Viluppuram  | Virudhunagar";

s_a[31]="  Adilabad | Bhadradri Kothagudem  | Hyderabad  | Jagtial  | Jangaon  | Jayashankar Bhoopalpally  | Jogulamba Gadwal  | Kamareddy  | Karimnagar  | Khammam  | Komaram Bheem Asifabad  | Mahabubabad  | Mahabubnagar  | Mancherial  | Medak  | Medchal  | Nagarkurnool  | Nalgonda  | Nirmal  | Nizamabad  | Peddapalli  | Rajanna Sircilla  | Rangareddy  | Sangareddy  | Siddipet  | Suryapet  | Vikarabad  | Wanaparthy  | Warangal (Rural)  | Warangal (Urban)  | Yadadri Bhuvanagiri";


s_a[32]=" Dhalai  | Gomati  | Khowai  | North Tripura  | Sepahijala  | South Tripura  | Unakoti  | West Tripura";


s_a[33]=" Almora | Bageshwar  | Chamoli  | Champawat  | Dehradun  | Haridwar  | Nainital  | Pauri Garhwal  | Pithoragarh  | Rudraprayag  | Tehri Garhwal  | Udham Singh Nagar  | Uttarkashi";



s_a[34]="  Agra  | Aligarh  | Allahabad  | Ambedkar Nagar  | Amethi (Chatrapati Sahuji Mahraj Nagar)  | Amroha (J.P. Nagar)  | Auraiya  | Azamgarh  | Baghpat  | Bahraich  | Ballia  | Balrampur  | Banda  | Barabanki  | Bareilly  | Basti  | Bhadohi  | Bijnor  | Budaun  | Bulandshahr  | Chandauli  | Chitrakoot  | Deoria  | Etah  | Etawah  | Faizabad  | Farrukhabad  | Fatehpur  | Firozabad  | Gautam Buddha Nagar  | Ghaziabad  | hazipur  | Gonda  | Gorakhpur  | Hamirpur  | Hapur (Panchsheel Nagar)  | Hardoi  | Hathras  | Jalaun  | Jaunpur  | Jhansi  | Kannauj  | Kanpur Dehat  | Kanpur Nagar  | Kanshiram Nagar (Kasganj)  | Kaushambi  | Kushinagar (Padrauna)  | Lakhimpur - Kheri  | Lalitpur  | Lucknow  | Maharajganj  | Mahoba  | Mainpuri  | Mathura  | Mau  | Meerut  | Mirzapur  | Moradabad  | Muzaffarnagar  | Pilibhit  | Pratapgarh  | RaeBareli  | Rampur  | Saharanpur  | Sambhal (Bhim Nagar)  | Sant Kabir Nagar  | Shahjahanpur  | Shamali (Prabuddh Nagar)  | Shravasti  | Siddharth Nagar  | Sitapur  | Sonbhadra  | Sultanpur  | Unnao  | Varanasi";


s_a[35]=" Alipurduar   | Bankura   | Birbhum   | Burdwan (Bardhaman)   | Cooch Behar   | Dakshin Dinajpur (South Dinajpur)   | Darjeeling   | Hooghly   | Howrah   | Jalpaiguri   | Kalimpong   | Kolkata   | Malda   | Murshidabad   | Nadia   | North 24 Parganas   | Paschim Medinipur (West Medinipur)   | Purba Medinipur (East Medinipur)   | Purulia   | South 24 Parganas   | Uttar Dinajpur (North Dinajpur)";


function print_state(state_id){
  // given the id of the <select> tag as function argument, it inserts <option> tags
  var option_str = document.getElementById(state_id);
  option_str.length=0;
  option_str.options[0] = new Option('Select State','');
  option_str.selectedIndex = 0;
  for (var i=0; i<state_arr.length; i++) {
    option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
  }
}

function print_city(city_id, city_index){
  var option_str = document.getElementById(city_id);
  option_str.length=0;  // Fixed by Julian Woods
  option_str.options[0] = new Option('Select District','');
  option_str.selectedIndex = 0;
  var city_arr = s_a[city_index].split("|");
  for (var i=0; i<city_arr.length; i++) {
    option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
  }
}




  </script>

  <style type="text/css">
    #body{ background: #e3e0cc;

    }
   .form-group{
    font-size: 18px;
   }

    .form-input{
      width: 100%;
      padding: 6.8px;
      font-size: 19px;
    }

  </style>
  

</head>
<body id="body" seamless="seamless" >

  <h1 class="text-center bg-dark text-white" >Welcome</h1>
  <br>
<div class="container" id="register_page_design" >
  
  <form name="userRegister" method="post" action="userRegister.php" >

    
    <div class="form-group">
      <label>Name</label>     
      <input type="text" name="name" id="name"  required="" class="form-input">
      <span id="nameerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="form-group">
      <label>Email</label>        
      <input type="email" name="email" id="email" class="form-input">
      <span id="emailerror" class="text-danger font-weight-bold"></span>
    </div>
    <div class="form-group">
      <label>Phone</label>      
      <input type="number" name="phone" id="phone"  class="form-input" title="Should be indian contact Number">
      <span id="phonenumerror" class="text-danger font-weight-bold"></span>
    </div>

      <div class="form-group">
      <label>Aadhar Number</label>      
      <input type="number" name="aadhar" id="aadhar"  class="form-input">
      <span id="aadharerror" class="text-danger font-weight-bold"></span>
    </div>

    <div class="form-group">
      <label><b>Address</b></label><br>
     
  <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-input" required=""></select>
<select id ="state" class="form-control" required=""></select>
<script language="javascript">print_state("sts");</script>

      <label>PinCode</label>
      <input type="number" name="pincode" style="width: 100%;padding: 8px;border-radius: 1px" id="pincode">

      <textarea rows="2" cols="30" name="address" id="address"  class="form-input" placeholder="Provide more details"></textarea>
      <span id="addresserror" class="text-danger font-weight-bold"></span>
    </div>


    <div class="form-group">
      <label>Password</label>     
      <input type="password" name="password" id="password"  class="form-input">
      <span id="passworderror" class="text-danger font-weight-bold"></span>
    </div>
    

    <div class="form-group">
      <label>Confirm Password</label>     
      <input type="password" name="cpassword" id="cpassword"  class="form-input">
      <span id="cpassworderror" class="text-danger font-weight-bold"></span>
    </div>

        <div class="form-group">
      <label>Gender</label>
      
      
        <input type="radio" name="gender" value="Male" checked="checked">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Others">Others
      
    </div>

    

    <div class="form-group">
      <label>SecreatQuestion</label>
      
      <select class="form-input">
        <option>What is your favorite mathematician?</option>
        <option>What is your nic name?</option>
        <option>What is your born city?</option>
      </select>
    </div>
    

    <div class="form-group">
      <label>Hint Answer</label>      
      <input type="text" name="hints" id="hints"  class="form-input">
      <span id="hintanserror" class="text-danger font-weight-bold"></span>
    </div>
    


  <strong style="margin-left: 25px;size: 20;font-size: 20px"><input type="checkbox" name="check" id="check" required="required"  >
  Accept terms and conditions</strong>
  <br>

  <button onclick="return validation()" id="registerBtn" style="margin-left: 42%;font-size: 25px;padding:9px;margin-bottom: 20px" >Register</button>




  
  </form>

</body>
</html>