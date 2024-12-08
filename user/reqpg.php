<?php include "../auth/auth.php";?>
<?php
require('dbconn.php');

$sq = "SELECT * FROM regus WHERE `email`='$_SESSION[email]'";
$qy = mysqli_query($conn, $sq);
$rws = mysqli_num_rows($qy);
?>
<html>
    <head><meta charset="UTF=8">
    <title>Request Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="application/javascript">
        
    </script>
    <style>
        .error {color: #FF0000;}
    body{
        background-color: #00cc66;
    background-image: url("imm.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-size: 300px 70px;
}
.container{
    background-color: whitesmoke;
    box-shadow: 1px 1px 2px 1px grey;
    padding: 30px 8px 20px 38px;
    width: 90%;
    height: 87%;
    margin-left: 4%;
}
.txt{
    width: 100%;
    height: 5%;
    border: 1px solid green;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    margin: 10px 0px 15px 0px;
}
.inpst{ 
    border: 1px solid green;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
}
.text{
    width: 80%;
    height: 5%;
    border: 1px solid green;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    margin: 10px 0px 15px 0px;
}
.btn{
    width: 20%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 5px 2px 5px 2px;
    box-shadow: 2px 2px 2px 2px;
    margin: 10px 0px 15px 0px;
}
select{
    width: 100%;
    height: 5%;
    border: 1px solid green;
    border-radius: 05px;
    box-shadow: 0px 0px 2px 0px green;
    padding: 5px 2px 5px 2px;
}
</style>
</head>
<body>
<script>
function myFunction() {
  var x = document.getElementById("myEmail").multiple;
  document.getElementById("demo").innerHTML = x;
}
function text(X) {
    if (X==0) document.getElementById("mycode").style.display="block";
    else document.getElementById("mycode").style.display="none";
    return;
}
</script>    
    <center><h1>Purchase Request Form.....درخواست فارم خریدنے کے لیے</h1></center>
    <div id="container" style="position: relative; left:40px; bottom: -15px;height: 245%;width: 80%;box-shadow: 0px 0px 10px 5px #183A1D;border-radius:20px">
    <div class="page-content" style="position: relative; left: 160px;color:#183A1D;font-size:24px">Check and Fill Details Properly.....چیک کریں اور تفصیلات کو صحیح طریقے سے پُر کریں۔</div>
   <div class="container">
        <form name="New Request" action="reqpgg.php" method="post" enctype="multipart/form-data">
        <strong><p><span class="error">* required field</span></p></strong>
            <center><h3>Requestor Details....درخواست گزار کی تفصیلات</h3></center>
                <table>
                    <?php if($rws) {
                        while($rlt=mysqli_fetch_assoc($qy)){
                    ?>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td><input type="text" name="name" style="background-color: #75a3a3;" class="txt" value="<?= $rlt['name']?>" readonly></td>
                        <td><strong>E-mail Id</strong></td>
                        <td><input type="email" name="email" style="background-color: #75a3a3;" class="txt" value="<?php echo $_SESSION['email']?>" readonly></td>
                        <td><strong>Contact No</strong></td>
                        <td><input type="number" name="contact" style="background-color: #75a3a3;" class="txt" value="<?= $rlt['contact'] ?>" readonly></td>
                    </tr>
                    <tr>
                        <td><strong>Department</strong></td>
                        <td><input type="text" name="dept" class="txt" style="background-color: #75a3a3;" value="<?= $rlt['dept'] ?>" readonly></td>
                        <td><strong>Designation</strong></td>
                        <td><input type="text" name="designation" class="txt" style="background-color: #75a3a3;" value="<?= $rlt['designation']?>" readonly></td>
                    </tr>
                    <?php } } else {
                        echo "<tr><td>No Data Found</td></tr>";
                    }?>
                    </table>
                <center><h3>Request Details....درخواست کی تفصیلات</h3></center>
                <table>
                    <tr>
                        <td><strong>Assassa Type</strong></td>
                        <td>
                            <input type="radio" value="Own" name="assassa">Own
                            <input type="radio" value="Rented" name="assassa">Rented
                            <span class="error">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Department</strong><span class="error">*</span></td>
                        <td>
                            <select name="department">
                                <option value="select">--select--</option>
                                <option value="Asasajat">Asasajat</option>
                                <option value="Audit">Audit</option>
                                <option value="Auraqe Muqaddasa">Auraqe Muqaddasa</option>
                                <option value="Ayyema E Masjid">Ayyema E Masjid</option>
                                <option value="Bairune Mulk">Bairune Mulk</option>
                                <option value="Courses">Courses</option>
                                <option value="Darul Madina">Darul Madina</option>
                                <option value="Darul Sunnah">Darul Sunnah</option>
                                <option value="Darul Sunnah Lilbanat">Darul Sunnah Lilbanat</option>
                                <option value="Digital/Distribution Deptarment">Digital/Distribution Deptarment</option>
                                <option value="Faizane Weekend School">Faizane Weekend School</option>
                                <option value="FOA">Faizane Online Academy</option>
                                <option value="FGRF">FGRF</option>
                                <option value="Finance Department">Finance Department</option>
                                <option value="Follow Up">Follow Up</option>
                                <option value="GSB">Gharelu Sadqa Box</option>
                                <option value="GNRF">Garib Nawaz Releif Fund</option>
                                <option value="Haftawar Ijtema/Madani Muzakra">Haftawar Ijtema/Madani Muzakra</option>
                                <option value="Hajj O Umrah">Hajj O Umrah</option>
                                <option value="Hind Offices">Hind Offices</option>
                                <option value="Ijara">Ijara</option>
                                <option value="Imamat Course">Imamat Course</option>
                                <option value="Islah Barae Qaidiyan">Islah Barae Qaidiyan</option>
                                <option value="Islahe Amaal">Islahe Amaal</option>
                                <option value="Izdiyade Hubb">Izdiyade Hubb</option>
                                <option value="Jadwal Hind">Jadwal Hind</option>
                                <option value="JTM Lilbanat">JTM Lilbanat</option>
                                <option value="JTM Lilbaneen">JTM Lilbaneen</option>
                                <option value="Kafan Dafan">Kafan Dafan</option>
                                <option value="Karkardagi/Madani Phool">Karkardagi/Madani Phool</option>
                                <option value="Khuddamul Masajid">Khuddamul Masajid</option>
                                <option value="Khususi 12 Maah">Khususi 12 Maah</option>
                                <option value="Khususi Rabta Bil Ulama E Wal Mashaikh">Khususi Rabta Bil Ulama E Wal Mashaikh</option>
                                <option value="Khususi Tajiraan">Khususi Tajiraan</option>
                                <option value="MAB">Madani Atiyat Box</option>
                                <option value="Madani Baharein">Madani Baharein</option>
                                <option value="Madani Basta">Madani Basta</option>
                                <option value="Madani Qafila">Madani Qafila</option>
                                <option value="MTM Baleghan">MTM Baleghan</option>
                                <option value="MTM Lilbanat/Banan">MTM Lilbanat/Banan</option>
                                <option value="Majlis E Elimia">Majlis E Elimia</option>
                                <option value="Majlis E Faizane Madina">Majlis E Faizane Madina</option>
                                <option value="Majlis E 12 Maah<">Majlis E 12 Maah</option>
                                <option value="Majlis IT">Majlis IT</option>
                                <option value="Majlis E Niyyat">Majlis E Niyyat</option>
                                <option value="Majlis E Tarajim">Majlis E Tarajim</option>
                                <option value="Maktab Tafteesh Hind">Maktab Tafteesh Hind</option>
                                <option value="Maktabatul Madina">Maktabatul Madina</option>
                                <option value="Mazarate Auliya">Mazarate Auliya</option>
                                <option value="Media Department">Media Department</option>
                                <option value="Member of Finance Dept (Rukn)">Member of Finance Dept (Rukn)</option>
                                <option value="MKIB">MKIB</option>
                                <option value="Muawanat Bara E Islami Bahnein">Muawanat Bara E Islami Bahnein</option>
                                <option value="Neik Amaal Zindagi Mein">Neik Amaal Zindagi Mein</option>
                                <option value="Online Istikhara">Online Istikhara</option>
                                <option value="Online MTM">Online MTM</option>
                                <option value="Plantation">Plantation</option>
                                <option value="Purchase Majlis">Purchase Majlis</option>
                                <option value="Rabita">Rabita</option>
                                <option value="Rabita Bil Ulama">Rabita Bil Ulama</option>
                                <option value="Ramazan Etikaf">Ramazan Etikaf</option>
                                <option value="Region Office">Region Office</option>
                                <option value="Risala Mutala">Risala Mutala</option>
                                <option value="Ruhani Ilaaj">Ruhani Ilaaj</option>
                                <option value="Sharai Rehnumai">Sharai Rehnumai</option>
                                <option value="Shoba E Taleem">Shoba E Taleem</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Special Person's">Special Person's</option>
                                <option value="Tajiran">Tajiran</option>
                                <option value="Tameerat">Tameerat</option>
                                <option value="Taqseem E Rasail">Taqseem E Rasail</option>
                                <option value="Test Majlis">Test Majlis</option>
                                <option value="Tibbi Ilaaj">Tibbi Ilaaj</option>
                                <option value="Trust">Trust</option>
                                <option value="Ushr">Ushr</option>
                                <option value="Waqf Amlaak">Waqf Amlaak</option>
                            </select>
                        </td>
                        <td><strong>Item Category</strong><span class="error">*</span></td>
                        <td>
                            <select name="itmcgr">
                            <option value="select">--select--</option>
                                <option value="Air Conditions">Air Conditions</option>
                                <option value="Appliance">Appliance</option>
                                <option value="Atiyat Box">Atiyat Boxes</option>
                                <option value="Basta">Basta</option>
                                <option value="Bio Metric">Bio Metric</option>
                                <option value="Books Printing">Books Printing</option>
                                <option value="Carpentary Work">Carpentry Work</option>
                                <option value="CCTV System">CCTV System</option>
                                <option value="Channel">Channel</option>
                                <option value="Civil">Civil</option>
                                <option value="Conference Room">Conference Room</option>
                                <option value="Desks">Desks</option>
                                <option value="Electrical Works">Electrical Work</option>
                                <option value="Fabrication">Fabrication</option>
                                <option value="Fire Alarm System">Fire Alarm System</option>
                                <option value="Furniture">Furniture</option>
                                <option value="IT">IT</option>
                                <option value="Kirana">Kirana</option>
                                <option value="Kitchen">Kitchen</option>
                                <option value="New Construction">New Construction</option>
                                <option value="Online Classes">Online Class Room</option>
                                <option value="Partitions">Partitions</option>
                                <option value="Professional Services">Professional Services</option>
                                <option value="Repair & Maintenance">Repair & Maintenance</option>
                                <option value="Scrap">Scrap</option>
                                <option value="Sound System">Sound System</option>
                                <option value="Studio">Studio</option>
                                <option value="Telephone">Telephone</option>
                                <option value="Other Request">Other Request</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><strong>Area</strong><span class="error">*</span></td>
                        <td><input type="text" name="area" class="txt" required></td>   
                        <td><strong>City</strong><span class="error">*</span></td>
                        <td><input type="text" name="city" class="txt" required></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><strong>Delivery Address</strong><span class="error">*</span></td><td><strong>State</strong><span class="error">*</span></td><td><strong>Region</strong><span class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><textarea name="dadd" rows="1" cols="60" class="txt"></textarea></td>
                        <td>
                            <select name="state" required>
                                <option value="select">--select--</option>
                                <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chattisgarh">Chhattisgarh</option>
                                <option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli</option>
                                <option value="Daman & Diu">Daman & Diu</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Lakshwadeep">Lakshwadeep</option>
                                <option value="MAdhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipura">Manipura</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Govt. of NCT of Delhi">The Government of NCT of Delhi</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>                                
                            </select>
                        </td>
                        <td>
                            <select name="region" required>
                                <option value="select">--select--</option>
                                <option value="Ajmer Region">Ajmer Region</option>
                                <option value="BAreilly Region">Bareilly Region</option>
                                <option value="Delhi Region">Delhi Region</option>
                                <option value="Hyderabad Region">Hyderabad Region</option>
                                <option value="Kolkata Region">Kolkata Region</option>
                                <option value="Mumbai Region">Mumbai Region</option>
                                <option value="Nagpur Region">Nagpur Region</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><strong>To_E-mail I'd</strong><span class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><textarea name="remail" rows="1" cols="80" placeholder="  Zimmedar,Nigran.....زمرد، نگران،"  class="txt" required></textarea></td>
                    </tr>
                    <tr>
                        <td><strong>Cc_E-mail I'd</strong><span class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><textarea name="ccemail" rows="1" cols="80" placeholder="  Maliyat,IT.....ملیات، آئی ٹی مجلس"  class="txt" required></textarea></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><strong>Details</strong><span class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><textarea name="details" rows="5" cols="120" placeholder="  Wazahat dijiye.....اپنی درخواست کی وضاحت کریں۔"  class="txt" required></textarea></td>
                    </tr>
                </table>
                <center><h3>Documents.....دستاویزات</h3></center>
                <div class="c2">
                    <div class="ingr">
                        <div class="pto">
                            <b><label>Sharing Quotations</label></b>
                            <label class="rc">Yes
                                <input type="radio" name="quote" value="Yes" onclick="text(0)" checked/>
                                <span class="chcmrk"></span>
                            </label>
                            <label class="rc">No
                                <input type="radio" name="quote" value="No" onclick="text(1)"/>
                                <span class="chcmrk"></span>
                            </label>
                        </div>
                    </div>
                </div><br>
                <div class="c2">
                    <div class="ingr" id="mycode">
                            <strong><label class="lbl">Vendor-1</label></strong>
                            <br><br>
                            <strong><label  class="lbl">Quotation</label></strong>
                            <input type="file" name="fileo"><br><br>
                            <strong><label  class="lbl">Name</label></strong>
                            <input class="inpst" type="text" name="vnameone" placeholder=" Vendor Name">
                            <strong><label  class="lbl">Contact Number</label></strong>
                            <input class="inpst" type="tel" name="vphoneone" placeholder=" Contact No">
                            <strong><label  class="lbl">Quotation Amount</label></strong>
                            <input class="inpst" type="number" name="oqa" placeholder=" 1st Quote Amount">
                        <br><br>
                            <strong><label class="lbl">Vendor-2</label></strong>
                            <br><br>
                            <strong><label  class="lbl">Quotation</label></strong>
                            <input type="file" name="filetwo"><br><br>
                            <strong><label  class="lbl">Name</label></strong>
                            <input class="inpst" type="text" name="vnametwo" placeholder=" Vendor Name">
                            <strong><label  class="lbl">Contact Number</label></strong>
                            <input class="inpst" type="tel" name="vphonetwo" placeholder=" Contact No">
                            <strong><label  class="lbl">Quotation Amount</label></strong>
                            <input class="inpst" type="number" name="tqa" placeholder=" 2nd Quote Amount">
                        <br><br>
                            <strong><label class="lbl">Vendor-3</label></strong>
                            <br><br>
                            <strong><label  class="lbl">Quotation</label></strong>
                            <input type="file" name="fileth"><br><br>
                            <strong><label  class="lbl">Name</label></strong>
                            <input class="inpst" type="text" name="vnamethree" placeholder=" Vendor Name">
                            <strong><label  class="lbl">Contact Number</label></strong>
                            <input class="inpst" type="tel" name="vphonethree" placeholder=" Contact No">
                            <strong><label  class="lbl">Quotation Amount</label></strong>
                            <input class="inpst" type="number" name="thqa" placeholder=" 3rd Quote Amount">
                        <br><br>
                    </div>
                </div><br>
                <div class="ingr">
                    <strong><label class="lbl">Manzuri Majlis Form</label></strong>
                    <br>
                    <input type="file" name="fileman">
                </div>
                <table>
                    <tr>
                        <center><input type="submit" class="btn" value="SUBMIT REQUEST" style="outline:none;border:none;background-color: #00b300;" name="insert"/></center>
                    </tr>
                </table>
        </form>
    </div>
    </div>
</body>
</html>