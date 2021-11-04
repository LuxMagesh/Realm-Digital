<?php
        // $ask_link = file_get_contents("https://hacker-news.firebaseio.com/v0/askstories.json?print=pretty");
        $ask_link = file_get_contents("https://interview-assessment-1.realmdigital.co.za/employees");
       
        // $askstories  = array(str_replace(' ', '', $ask_link2));
        // $askstories1  = array(str_replace('[','', $ask_link));
        // $topstories2  = array(str_replace(']','', $askstories1));
        $ask_link2 =  json_decode($ask_link);

        foreach($ask_link2 as $pr => $prr) {
            echo "<pre>";

                  class test {

                    public function MainSys(){
                         $this->HappyBDay();
                         $this->StartDate();
                         $this->EndDate();
                    }
               
                    private function HappyBDay(){
                        $api_url = 'https://interview-assessment-1.realmdigital.co.za/employees';

                    // Read JSON file
                        $json_data = file_get_contents($api_url);
                        $NewData =  json_decode($json_data);

                        //  print_r($json_data);
                         foreach($NewData as $np => $npp) {
                            $PlayToday = getdate();
                            $CurrentTime = getdate();
                            $DateOB = $npp->dateOfBirth;
                            $MyGuy = $npp->name;
                            $MyGuy2 = $npp->lastname;
                            $dateOfBirth = $npp->dateOfBirth;
                            $EmpStartDate = $npp->employmentStartDate;
                            $EmpEndDate = $npp->employmentEndDate;

                            echo "<pre>";
                            //    print_r($MyGuy);
                            echo "</pre>";
                        

                        if ($CurrentTime === $DateOB) {
                            echo "Happy Birthday !".$MyGuy.  $MyGuy2;
                            if ($EmpEndDate === " ") {
                                    echo "Employee still currently working";
                            }elseif 
                            ($EmpStartDate === " ") {
                                    echo "Not Yet an Employee";
                            }
                            elseif ($EmpStartDate !== " ") {
                                    echo "$MyGuy is currently working here at the company";
                            } elseif 
                            ($EmpEndDate !== " ") {
                                    echo " ";
                            } 
                            $prr++;
                        }else{
                            echo " ";
                            // $prr++;
                        }
                
                    }
               
               }
            }
               $testObject = new test();
               
               $testObject->MainSys();
           
                // print_r($prr);

            echo "</pre>";
          }
            

?>