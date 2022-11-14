<?php

include '../includes/connection/connection.php'; // ako g include ang conn.php ngari kay para ma access nako ang Dbh nga class.. pero pede man ka mo himog class sulod sa isa ka file, pero much better e separate nimo aron dili hugaw kitaon.


class Admin extends Dbh{ // nag gamit kog class kay proper nya organise ang code nimo, kaysa sa procudural. follow lang tas Object Oriented Format. pero kahibaw naka ana haha. kaning "extends" nga keyword bali ako g inherit ang Dbh nga class ngadtos conn.php.. 

    public function login($username, $password){
        $sql = "SELECT * FROM admin_user WHERE username = ? AND password = ?"; // query request sa database
        
        $stmt = $this -> connect() -> prepare($sql); // post statement if naa ka gusto nga kuhaon nga specific nga data sa database gamit kag prepare() state instead of query()

        $stmt -> execute([$username, $password]); // e pasa nimo ang data gikan sa parameter ani nga function nga g ask nimo ngadto sa query

        while($row = $stmt -> fetch()){ // nag assign kog $row nga variable -- kanang naay dollar sign vriable rana. nga mo gunit sa data nga g kuha nako sa database.
            return $row['username'] == $username && $row['password'] == $password; // kaning $row mao ning row data sa table ngadtos database, nya column nang sulod anang $row nga array, specifically username og password.. 
        } // human g return ra nako ang statement if true or false ba, bali if pareha ang g pasa gikan sa user nya sa database mao nang true, if dili false ang return.
    }

    public function addworkoutClass($workoutclass_id, $workoutclassname,   $workoutclass_description ){
        $sql = "INSERT INTO tbl_category (workoutclass_id, workoutclass_name, workoutclass_description) VALUES(?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$workoutclass_id, $workoutclassname, $workoutclass_description]); 
    }
    public function editworkoutClass( $workoutclass_id,$workoutclassname, $workoutclass_rate,  $time, $workoutclass_description ){
        $sql = $this-> connect() -> prepare ("UPDATE tbl_category SET workoutclass_id='$workoutclass_id', workoutclass_name='$workoutclassname', workoutclass_rate='$workoutclass_rate',time='$time', workoutclass_description='$workoutclass_description' WHERE workoutclass_id='$workoutclass_id'");
        $sql -> execute();
    }

    public function deleteworkoutClass($workoutclass_id){
        function encrypt_data($key, $message) {

    $ciphering = "AES-128-CTR";

    $iv_length = openssl_cipher_iv_length($ciphering);
    $option = 0;

    $encryption_iv= '1234567891011121';

    $encryption_key = $key;

    return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
}
       try {
        $sql = $this -> connect() -> prepare("DELETE FROM tbl_category WHERE workoutclass_id='$workoutclass_id' ");
        $sql -> execute();
        $message = 'Data has been successfully deleted.';
        header("Location: ../module/workoutclass.php?success=".encrypt_data("success", $message));
       } catch (PDOException $e) {
        echo $e->getMessage();
        $message = 'The data you want to delete is restricted. Please Try again.';
        header("Location: ../module/workoutclass.php?error=".encrypt_data("error", $message));
      
       }
    }

   public function generateGroupId(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_category'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();

        $code = "PROG_";
        $year = date("Y");
        $count = 10000;


        if (implode('', $rows) == 0){
           return $workoutclass_id = $code.$year.$count+1;
        }else{
            $workoutclass_id = $code.$year.$count+implode('', $rows)+1;
            $last_row = $this -> connect() -> prepare('SELECT workoutclass_id FROM tbl_category ORDER BY workoutclass_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($workoutclass_id == implode("", $get_last_row)){
                return $workoutclass_id = $code.$year.$count+implode('', $rows)+2;
            }else{
                return $workoutclass_id = $code.$year.$count+substr(implode("", $get_last_row), -1)+1;
            }
        }
    }

    public function addClient($client_id, $client_name, $client_middlename, $client_lastname, $client_email, $client_birthdate, $contact_number, $client_type, $class_type, $status_type ,$client_code){
        $sql = "INSERT INTO tbl_client (client_id, client_name, client_middlename, client_lastname, client_email, client_birthdate, client_contactNumber, client_type, client_class, client_status,client_code) VALUES(?,?,?,?,?,?,?,?,?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$client_id, $client_name, $client_middlename, $client_lastname,$client_email, $client_birthdate, $contact_number, $client_type, $class_type, $status_type,$client_code] ); 
    }


    public function editClient($client_id, $client_name, $client_middlename, $client_lastname, $client_email, $client_birthdate, $contactNumber, $client_type, $class_type, $status_type ){
        $sql = $this-> connect() -> prepare ("UPDATE tbl_client SET client_id='$client_id', client_name='$client_name', client_middlename='$client_middlename', client_lastname='$client_lastname', client_email='$client_email',client_birthdate='$client_birthdate', client_contactNumber='$contactNumber', client_type='$client_type', client_class='$class_type', client_status='$status_type' WHERE client_id ='$client_id'");
        $sql -> execute();
    }

    public function deleteclient($client_id){
        function encrypt_data($key, $message) {

            $ciphering = "AES-128-CTR";
        
            $iv_length = openssl_cipher_iv_length($ciphering);
            $option = 0;
        
            $encryption_iv= '1234567891011121';
        
            $encryption_key = $key;
        
            return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
        }
        $sql = $this -> connect() -> prepare("DELETE FROM tbl_client WHERE client_id='$client_id' ");
        $sql -> execute();
        $message = 'Data has been successfully deleted.';
        header("Location: ../module/client.php?success=".encrypt_data("success", $message));
    }
    

    public function generateClientId(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_client'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();
    
        $code = "CUST_";
        $year = date("Y");
        $count = 10000;
    
    
        if (implode('', $rows) == 0){
           return $client_id = $code.$year.($count+1);
        }else{
            $client_id = $code.$year.($count+implode('', $rows)+1);
            $last_row = $this -> connect() -> prepare('SELECT client_id FROM tbl_client ORDER BY client_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($client_id == implode("", $get_last_row)){
                return $client_id = $code.$year.($count+implode('', $rows)+2);
            }else{
                return $client_id = $code.$year.($count+substr(implode("", $get_last_row), -1)+1);
            }
        }
    }

    public function addEvent($event_id, $eventName, $eventCategory, $eventVenue, $eventInstructor, $eventDate, $timeStart, $timeEnd, $eventfee, $eventDescription ){
        $sql = "INSERT INTO tbl_event (event_id, event_name, eventCategory, event_venue ,eventInstructor, event_timeStart, event_timeEnd, event_date, event_fee, event_description) VALUES(?,?,?,?,?,?,?,?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$event_id, $eventName, $eventCategory, $eventVenue, $eventInstructor, $eventDate, $timeStart, $timeEnd, $eventfee, $eventDescription]); 
    }
    public function editEvent($event_id, $event_name, $event_venue, $eventInstructor, $event_date, $event_timeStart, $event_timeEnd, $event_fee, $event_description ){
        $sql = $this-> connect() -> prepare ("UPDATE tbl_event SET event_id='$event_id', event_name='$event_name',event_venue='$event_venue', eventInstructor='$eventInstructor', event_date='$event_date', event_timeStart='$event_timeStart', event_timeEnd='$event_timeEnd', event_fee='$event_fee', event_description='$event_description' WHERE event_id ='$event_id'");
        $sql -> execute();
    }

    public function deleteEvent($event_id){
        function encrypt_data($key, $message) {

            $ciphering = "AES-128-CTR";
        
            $iv_length = openssl_cipher_iv_length($ciphering);
            $option = 0;
        
            $encryption_iv= '1234567891011121';
        
            $encryption_key = $key;
        
            return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
        }
    
        $sql = $this -> connect() -> prepare("DELETE FROM tbl_event WHERE event_id='$event_id' ");
        $sql -> execute();
        $message = 'Data has been successfully deleted.';
        header("Location: ../module/event.php?success=".encrypt_data("success", $message));
    }

    public function generateEventId(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_event'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();

        $code = "EVNT_";
        $year = date("Y");
        $count = 10000;


        if (implode('', $rows) == 0){
           return $event_id = $code.$year.$count+1;
        }else{
            $event_id = $code.$year.$count+implode('', $rows)+1;
            $last_row = $this -> connect() -> prepare('SELECT event_id FROM tbl_event ORDER BY event_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($event_id == implode("", $get_last_row)){
                return $event_id = $code.$year.$count+implode('', $rows)+2;
            }else{
                return $event_id = $code.$year.$count+substr(implode("", $get_last_row), -1)+1;
            }
        }
    }
    public function addInstructor($instructor_id, $instructorProgram, $instructorFirstname, $instructorMiddlename, $instructorLastname, $instructorContactNumber, $instructorBirthdate, $instructorEmail ){
        $sql = "INSERT INTO tbl_instructor (instructor_id, instructor_program, instructor_firstname, instructor_middlename, instructor_lastname, instructor_contactnumber, instructor_birthdate, instructor_email) VALUES(?,?,?,?,?,?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$instructor_id, $instructorProgram, $instructorFirstname, $instructorMiddlename, $instructorLastname, $instructorContactNumber, $instructorBirthdate, $instructorEmail] ); 
    }
    public function editInstructor($instructor_id , $instructorfirstname, $instructormiddlename, $instructorlastname, $instructorContactNumber, $instructorBirthdate, $instructoremail){
    $sql = $this-> connect() -> prepare ("UPDATE tbl_instructor SET instructor_id='$instructor_id', 
    instructor_firstname='$instructorfirstname',instructor_middlename='$instructormiddlename', 
    instructor_lastname='$instructorlastname', instructor_contactnumber='$instructorContactNumber', 
    instructor_birthdate='$instructorBirthdate', instructor_email='$instructoremail' WHERE instructor_id ='$instructor_id'");
    $sql -> execute();
    }

    public function deleteinstructor($instructor_id){
        function encrypt_data($key, $message) {

            $ciphering = "AES-128-CTR";
        
            $iv_length = openssl_cipher_iv_length($ciphering);
            $option = 0;
        
            $encryption_iv= '1234567891011121';
        
            $encryption_key = $key;
        
            return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
        }
         try {
        $sql = $this -> connect() -> prepare("DELETE FROM tbl_instructor WHERE instructor_id='$instructor_id' ");
        $sql -> execute();
        $message = 'Data has been successfully deleted.';
        header("Location: ../module/instructor.php?success=".encrypt_data("success", $message));
    } catch (PDOException $e) {
        echo $e->getMessage();
        $message = 'The data you want to delete is restricted. Please Try again.';
        header("Location: ../module/instructor.php?error=".encrypt_data("error", $message));
       }
    }

    public function generateInstructorId(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_instructor'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();

        $code = "INST_";
        $year = date("Y");
        $count = 10000;


        if (implode('', $rows) == 0){
           return $event_id = $code.$year.$count+1;
        }else{
            $event_id = $code.$year.$count+implode('', $rows)+1;
            $last_row = $this -> connect() -> prepare('SELECT instructor_id FROM tbl_instructor ORDER BY instructor_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($event_id == implode("", $get_last_row)){
                return $event_id = $code.$year.$count+implode('', $rows)+2;
            }else{
                return $event_id = $code.$year.$count+substr(implode("", $get_last_row), -1)+1;
            }
        }
    }
    public function addpromo($promo_id, $promo_name,  $promo_discount, $promo_durationStart, $promo_durationEnd, $promo_description ){
        $sql = "INSERT INTO tbl_promo (promo_id, promo_name, promo_discount, promo_durationStart, promo_durationEnd, promo_description) VALUES(?,?,?,?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$promo_id, $promo_name,$promo_discount, $promo_durationStart, $promo_durationEnd, $promo_description ]); 
    }
    public function editpromo($promo_id, $promo_name, $promo_discount, $promo_durationStart, $promo_durationEnd, $promo_description){
        $sql = $this-> connect() -> prepare ("UPDATE tbl_promo SET promo_id='$promo_id', 
        promo_name='$promo_name',promo_discount='$promo_discount', 
        promo_durationStart='$promo_durationStart', promo_durationEnd='$promo_durationEnd', 
        promo_description='$promo_description' WHERE promo_id ='$promo_id'");
        $sql -> execute();
        }
        public function deletepromo($promo_id){
             function encrypt_data($key, $message) {

            $ciphering = "AES-128-CTR";
        
            $iv_length = openssl_cipher_iv_length($ciphering);
            $option = 0;
        
            $encryption_iv= '1234567891011121';
        
            $encryption_key = $key;
        
            return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
        }
            $sql = $this -> connect() -> prepare("DELETE FROM tbl_promo WHERE promo_id='$promo_id' ");
            $sql -> execute();
            $message = 'Data has been successfully deleted.';
            header("Location: ../module/promo.php?success=".encrypt_data("success", $message));
        }
 
    public function generatePromoID(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_promo'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();

        $code = "PROMO_";
        $year = date("Y");
        $count = 10000;


        if (implode('', $rows) == 0){
           return $event_id = $code.$year.$count+1;
        }else{
            $event_id = $code.$year.$count+implode('', $rows)+1;
            $last_row = $this -> connect() -> prepare('SELECT promo_id FROM tbl_promo ORDER BY promo_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($event_id == implode("", $get_last_row)){
                return $event_id = $code.$year.$count+implode('', $rows)+2;
            }else{
                return $event_id = $code.$year.$count+substr(implode("", $get_last_row), -1)+1;
            }
        }
    }
    public function addDiscount($discount_id, $discountname, $discountprice, $discountdescription){
        $sql = "INSERT INTO tbl_discount (discount_id , discount_name, discount, discount_description) VALUES(?,?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$discount_id, $discountname,  $discountprice, $discountdescription ]); 
    }
    
    
    public function editdiscount($discount_id, $discountname,  $discountprice, $discountdescription){
        $sql = $this-> connect() -> prepare ("UPDATE tbl_discount SET discount_id='$discount_id',
        discount_name='$discountname', discount='$discountprice', discount_description='$discountdescription'
      WHERE discount_id ='$discount_id'");
        $sql -> execute();
        }




    public function deletediscount($discount_id){
        function encrypt_data($key, $message) {

            $ciphering = "AES-128-CTR";
        
            $iv_length = openssl_cipher_iv_length($ciphering);
            $option = 0;
        
            $encryption_iv= '1234567891011121';
        
            $encryption_key = $key;
        
            return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
        }
        $sql = $this -> connect() -> prepare("DELETE FROM tbl_discount WHERE discount_id='$discount_id' ");
        $sql -> execute();
        $message = 'Data has been successfully deleted.';
        header("Location: ../module/discount.php?success=".encrypt_data("success", $message));
    }
    public function generateDiscountID(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_discount'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();

        $code = "DISC_";
        $year = date("Y");
        $count = 10000;


        if (implode('', $rows) == 0){
           return $event_id = $code.$year.$count+1;
        }else{
            $event_id = $code.$year.$count+implode('', $rows)+1;
            $last_row = $this -> connect() -> prepare('SELECT discount_id FROM tbl_discount ORDER BY discount_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($event_id == implode("", $get_last_row)){
                return $event_id = $code.$year.$count+implode('', $rows)+2;
            }else{
                return $event_id = $code.$year.$count+substr(implode("", $get_last_row), -1)+1;
            }
        }
    }
    public function addequipment($equipment_id, $equipmentname, $equipmentquantity){
        $sql = "INSERT INTO tbl_equipment (equipment_id , equipment_name, equipment_quantity) VALUES(?,?,?)"; 
        $stmt = $this -> connect() -> prepare($sql);
        $stmt -> execute([$equipment_id, $equipmentname,  $equipmentquantity]); 
    }
    public function deleteequipment($equipment_id){
        function encrypt_data($key, $message) {

            $ciphering = "AES-128-CTR";
        
            $iv_length = openssl_cipher_iv_length($ciphering);
            $option = 0;
        
            $encryption_iv= '1234567891011121';
        
            $encryption_key = $key;
        
            return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
        }
        $sql = $this -> connect() -> prepare("DELETE FROM tbl_equipment WHERE equipment_id='$equipment_id' ");
        $sql -> execute();
        $message = 'Data has been successfully deleted.';
        header("Location: ../module/equipment.php?success=".encrypt_data("success", $message));
    }
    
    public function generateEquipmentId(){
        $lastrow = $this -> connect() -> prepare('SELECT COUNT(*) FROM tbl_equipment'); 
        $lastrow -> execute();
        $rows = $lastrow->fetch();

        $code = "EQPT_";
        $year = date("Y");
        $count = 10000;


        if (implode('', $rows) == 0){
           return $equipment_id = $code.$year.$count+1;
        }else{
            $equipment_id = $code.$year.$count+implode('', $rows)+1;
            $last_row = $this -> connect() -> prepare('SELECT equipment_id FROM tbl_equipment ORDER BY equipment_id DESC LIMIT 1'); 
            $last_row -> execute();
            $get_last_row = $last_row->fetch();
            if($equipment_id == implode("", $get_last_row)){
                return $equipment_id = $code.$year.$count+implode('', $rows)+2;
            }else{
                return $equipment_id = $code.$year.$count+substr(implode("", $get_last_row), -1)+1;
            }
        }
    }



    
public function checkExistClient($first_name, $last_name, $birthdate){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_client WHERE client_name = ? AND client_lastname = ? AND client_birthdate = ?');
    $statement->execute([$first_name, $last_name, $birthdate]);
    $tbl_client = $statement->fetch();
    return $first_name == $tbl_client['client_name'] && $last_name == $tbl_client['client_lastname'] && $birthdate == $tbl_client['client_birthdate'];
}
public function checkExistEmail($email){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_client WHERE client_email = ?');
    $statement->execute([$email]);
    $tbl_client = $statement->fetch();
    return $email == $tbl_client['client_email'];
}
public function checkExistCategory($category){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_category WHERE workoutclass_name = ?');
    $statement->execute([$category]);
    $tbl_category = $statement->fetch();
    return $category == $tbl_category['workoutclass_name'];
}
public function checkExistEventName($event){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_event WHERE event_name = ?');
    $statement->execute([$event]);
    $tbl_event = $statement->fetch();
    return $event == $tbl_event['event_name'];
}
public function checkExistInstructor($instructor_firstname, $instructor_lastname, $instructor_birthdate){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_instructor WHERE instructor_firstname = ? AND instructor_lastname = ? AND instructor_birthdate = ?');
    $statement->execute([$instructor_firstname,$instructor_lastname, $instructor_birthdate]);
    $tbl_instructor = $statement->fetch();
    return $instructor_firstname == $tbl_instructor['instructor_firstname'] && $instructor_lastname == $tbl_instructor['instructor_lastname'] && $instructor_birthdate == $tbl_instructor['instructor_birthdate'];
}
public function checkExistInstructorEmail($intructor_email){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_instructor WHERE instructor_email = ?');
    $statement->execute([$intructor_email]);
    $tbl_instructor = $statement->fetch();
    return $intructor_email == $tbl_instructor['instructor_email'];
}
public function checkExistPromo($promo){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_promo WHERE promo_name = ?');
    $statement->execute([$promo]);
    $tbl_promo = $statement->fetch();
    return $promo == $tbl_promo['promo_name'];
}
public function checkExistDiscountName($discount){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_discount WHERE discount_name = ?');
    $statement->execute([$discount]);
    $tbl_discount = $statement->fetch();
    return $discount == $tbl_discount['discount_name'];
}
public function checkExistEquipmentName($promo){
    $statement =$this -> connect() -> prepare('SELECT * FROM tbl_equipment WHERE equipment_name = ?');
    $statement->execute([$promo]);
    $tbl_promo = $statement->fetch();
    return $promo == $tbl_promo['equipment_name'];
}





}




?>