<?php
//db connection
$con=mysqli_connect("localhost","root","","temple");



if(isset($_POST["add_state"]))
{
    add_state();
}
elseif(isset($_POST["edit_state"]))
{
$id=$_GET["id"];
$state=$_POST["state_name"];
$obj2=new state();
$obj2->edit_state($id,$state);
}



//add state start
function add_state()
{
    global $con;
    $state=strip_tags($_POST["state"]);
    $sql2="select * from state where state_name='$state'";
    $result=mysqli_query($con,$sql2);
    if(mysqli_num_rows($result)>0)
    {
        ?>
        <script>
            document.getElementById("err-state").innerHTML="State Already Exists...";
        </script>
        <?php
    }
    else
    {
        $sql="insert into state (state_name) values ('$state')";
        if(mysqli_query($con,$sql))
        {
    ?>
    <script>
    Swal.fire({
    title: "Congratulations!",
    text: "Data Added Successfully",
    icon: "success"
    });
    </script>
    <?php
        }
        else
        {
    ?>
    <script>
    Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Error to add state!",
    });
    </script>
    <?php
        }
    }
}
//add state end


// states start
class state
{
    public function get_state()
    {
        global $con;
        $sql="select * from state";
        $result=mysqli_query($con,$sql);
        $r=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($r,$row);
        }
        return $r;
        
    }
    public function getstateById($id)
    {
        global $con;
        $sql="select * from state where sid=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
    public function edit_state($id,$state)
    {
        global $con;
        $sql2="update state set state_name='$state' where sid=$id";
        if(mysqli_query($con,$sql2))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "state Updated Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to update state!",
            });
            </script>
            <?php
        }
    }
}
// states end

//district start

if(isset($_POST["add_district"]))
{
 $obj=new district();
 $obj->add_district($_POST["state_id"],$_POST["district"]);   
}
elseif(isset($_POST["edit_district"]))
{
 $obj=new district();
 $obj->edit_district($_POST["state_id"],$_POST["district"],$_GET["id"]);   
}

class district
{
    public function edit_district($state_id,$district,$id)
    {
        global $con;
        $sql2="update district set state_id=$state_id,district_name='$district' where did=$id";
        if(mysqli_query($con,$sql2))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "district Updated Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to update district!",
            });
            </script>
            <?php
        }
    }
    function add_district($state_id,$district)
    {
        global $con;
        $sql="insert into district (state_id,district_name) values ($state_id,'$district')";
        if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "District added Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to add a district!"
            });
            </script>
            <?php
        }
    }
    public function get_district()
    {
        global $con;
        $sql="select * from district inner join state on district.state_id=state.sid order by district.did desc";
        $result=mysqli_query($con,$sql);
        $r=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($r,$row);
        }
        return $r;
        
    }
    public function getdistrictById($id)
    {
        global $con;
        $sql="select * from district inner join state on district.state_id=state.sid where district.did=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//district end


//taluka start 

if(isset($_POST["add_taluka"]))
{
    $state_id=$_POST["state_id"];
    $district_id=$_POST["district_id"];
    $taluka_name=$_POST["taluka_name"];
    $obj7=new taluka();
    $obj7->add_taluka($state_id,$district_id,$taluka_name);

}
if(isset($_POST["edit_taluka"]))
{
    $state_id=$_POST["state_id"];
    $district_id=$_POST["district_id"];
    $taluka_name=$_POST["taluka_name"];
    $id=$_GET["id"];
    $obj7=new taluka();
    $obj7->edit_taluka($state_id,$district_id,$taluka_name,$id);

}

//taluka end
class taluka
{
   
    public function edit_taluka($state_id,$district_id,$taluka_name,$id)
    {
        global $con;
        $sql="update taluka set state_id=$state_id,district_id=$district_id,taluka_name='$taluka_name' where tid=$id";
        if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "Taluka updated Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to update a Taluka!"
            });
            </script>
            <?php
        }

    }
    public function add_taluka($state_id,$district_id,$taluka_name)
    {
        global $con;
        $sql="insert into taluka (state_id,district_id,taluka_name) values ($state_id,$district_id,'$taluka_name')";
        if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "Taluka added Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to add a Taluka!"
            });
            </script>
            <?php
        }

    }
    public function get_taluka()
    {
        global $con;
        $sql="select * from taluka inner join state on taluka.state_id=state.sid inner join district on taluka.district_id=district.did order by taluka.tid desc";
        $result=mysqli_query($con,$sql);
        $r=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($r,$row);
        }
        return $r;
        
    }
    public function gettalukaById($id)
    {
        global $con;
        $sql="select * from taluka inner join state on taluka.state_id=state.sid inner join district on taluka.district_id=district.did where taluka.tid=".$_GET["id"];
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//add devotee start
if(isset($_POST["add_devotee"]))
{
    $devotee_name=$_POST["devotee_name"];
    $bdate=$_POST["bdate"];
    $phone=$_POST["phone"];
    $religion=$_POST["religion"];
    $state_id=$_POST["state_id"];
    $district_id=$_POST["district_id"];
    $taluka_id=$_POST["taluka_id"];
    $sql="insert into devotee values (NULL,'$devotee_name','$bdate','$phone',
    '$religion',$state_id,$district_id,$taluka_id,'active',NULL)";
    if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "Devotee added Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to add a Devotee!"
            });
            </script>
            <?php
        }
}
//add devotee end

//edit devotee start

if(isset($_POST["edit_devotee"]))
{
    $devotee_name=$_POST["devotee_name"];
    $bdate=$_POST["bdate"];
    $phone=$_POST["phone"];
    $religion=$_POST["religion"];
    $state_id=$_POST["state_id"];
    $district_id=$_POST["district_id"];
    $taluka_id=$_POST["taluka_id"];
    $status=$_POST["status"];
    $sql78="update devotee set devotee_name='$devotee_name',bdate='$bdate',phone='$phone',
    religion='$religion',state_id='$state_id',district_id='$district_id',taluka_id='$taluka_id',
    status='$status' where devotee_id=".$_GET["id"];
    if(mysqli_query($con,$sql78))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Devotee updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a Devotee!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }
}

//edit devotee end

class devotee
{
    public function get_devotee()
    {
        global $con;
        $sql="select * from devotee order by devotee_id desc";
        $result=mysqli_query($con,$sql);
        $r=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($r,$row);
        }
        return $r;
        
    }
    public function getDevoteebyId($id)
    {
        global $con;
        $sql6="select * from devotee inner join district on district.did=devotee.district_id inner join taluka on devotee.taluka_id=taluka.tid where devotee_id=$id";
        $result22=mysqli_query($con,$sql6);
        return $row22=mysqli_fetch_assoc($result22);
    }
}

//add seva start

if(isset($_POST["add_seva"]))
{
    $seva_name=$_POST["seva_name"];
    $charge=$_POST["charge"];
    $no_of_person=$_POST["no_of_person"];
    $sql="insert into seva (seva_name,charge,no_of_person) values ('$seva_name','$charge','$no_of_person')";
    if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "Seva added Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to add a Seva!"
            });
            </script>
            <?php
        }

}

//add seva end

//edit seva start

if(isset($_POST["edit_seva"]))
{
    $seva_name=$_POST["seva_name"];
    $charge=$_POST["charge"];
    $no_of_person=$_POST["no_of_person"];
    $sql="update seva set seva_name='$seva_name',charge='$charge',no_of_person='$no_of_person' where seva_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Seva updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a Seva!"
        });
        </script>
        <?php
    }
}

//edit seva end


//manage seva
class seva
{
    public function get_sevas()
    {
        global $con;
        $sql="select * from seva order by seva_id desc";
        $result=mysqli_query($con,$sql);
        $r=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($r,$row);
        }
        return $r;
    }
    public function getSevabyId($id)
    {
        global $con;
        $sql="select * from seva where seva_id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
}

//add schedule start

if(isset($_POST["add_schedule"]))
{
    $devotee_name=$_POST["devotee_name"];
    $seva_name=$_POST["seva_name"];
    $date=$_POST["rdate"];
    $sql="insert into schedule values (NULL,$devotee_name,$seva_name,'$date',NULL)";
    if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "Schedule added Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to add a Schedule!"
            });
            </script>
            <?php
        }
}

//add schedule end

//edit schedule start

if(isset($_POST["edit_schedule"]))
{
    $devotee_name=$_POST["devotee_name"];
    $seva_name=$_POST["seva_name"];
    $date=$_POST["rdate"];
    $sql="update schedule set devotee_id=$devotee_name,seva_id=$seva_name,date='$date' where schedule_id=
    ".$_GET["id"];
    if(mysqli_query($con,$sql))
        {
            ?>
                <script>
                Swal.fire({
                title: "Congratulations!",
                text: "Schedule updated Successfully",
                icon: "success"
                });
                </script>
            <?php
        }
        else
        {
            ?>
            <script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error to update a Schedule!"
            });
            </script>
            <?php
            echo mysqli_error($con);
        }

}

//edit schedule end


//manage schedule start

class schedule
{
    public function getSchedules()
    {
        global $con;
        $sql="select * from schedule inner join seva on schedule.seva_id=seva.seva_id inner join devotee on
        schedule.devotee_id=devotee.devotee_id";
        $result=mysqli_query($con,$sql);
        $a=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($a,$row);
        }
        return $a;
    }
    public function getSchedulebyId($id)
    {
        global $con;
        $sql="select * from schedule where schedule_id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
}
//manage schedule end

//add income type start

if(isset($_POST["add_income_type"]))
{
    $income_type_name=$_POST["income_type_name"];
    $sql="insert into income_type (income_type_name) values ('$income_type_name')";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Income type added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a Income type!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//add income type end

//edit income type start

if(isset($_POST["edit_income_type"]))
{
    $income_type_name=$_POST["income_type_name"];
    $sql="update income_type set income_type_name='$income_type_name' where income_type_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Income type updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a Income type!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}


//edit income type end


//manage income type start

class income_type
{
    public function get_income_types()
    {
        global $con;
        $sql="select * from income_type";
        $result=mysqli_query($con,$sql);
        $a=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($a,$row);
        }
        return $a;
    }
    public function get_income_type_byId($id)
    {
        global $con;
        $sql="select * from income_type where income_type_id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
}

//manage income type end

//add income start

if(isset($_POST["add_income"]))
{
    $receipt_no=$_POST["receipt_no"];
    $rdate=$_POST["rdate"];
    $devotee_id=$_POST["devotee_id"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $payment_type=$_POST["payment_type"];
    $income_type_id=$_POST["income_type_id"];
    $seva_id=$_POST["seva_id"];
    $charge=$_POST["charge"];
    $sql="insert into income values(NULL,'$receipt_no','$rdate',$devotee_id,'$phone','$address','$payment_type',
    $income_type_id,$seva_id,$charge,NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Income added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a Income!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//add income end

//manage income start

class income
{
    public function get_income()
    {
        global $con;
        $sql="select * from income inner join devotee on devotee.devotee_id=income.devotee_id inner join 
        seva on income.seva_id=seva.seva_id inner join income_type on income.income_type_id=income_type.income_type_id order by in_id desc";
        $result=mysqli_query($con,$sql);
        $r=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($r,$row);
            }
        }
        return $r;
    }
    public function get_income_byId($id)
    {
        global $con;
        $sql="select * from income inner join devotee on devotee.devotee_id=income.devotee_id inner join 
        seva on income.seva_id=seva.seva_id inner join income_type on income.income_type_id=income_type.income_type_id where income.in_id=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
}

//manage income end



//edit income start

if(isset($_POST["edit_income"]))
{
    $receipt_no=$_POST["receipt_no"];
    $rdate=$_POST["rdate"];
    $devotee_id=$_POST["devotee_id"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $payment_type=$_POST["payment_type"];
    $income_type_id=$_POST["income_type_id"];
    $seva_id=$_POST["seva_id"];
    $charge=$_POST["charge"];
    $sql="update income set receipt_no='$receipt_no',rdate='$rdate',devotee_id=$devotee_id,phone='$phone',
    address='$address',payment_type='$payment_type',income_type_id='$income_type_id',
    seva_id=$seva_id,charge=$charge where in_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Income updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a Income!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//edit income end

//add expense start

if(isset($_POST["add_expense"]))
{
    $expense_type_name=$_POST["expense_type_name"];
    $edate=$_POST["edate"];
    $transaction_type=$_POST["transaction_type"];
    $amount=$_POST["amount"];
    $sql="insert into expense values(NULL,'$expense_type_name','$edate','$transaction_type',$amount,NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Add expenses Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a expense!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }
}

//add expense end

//edit expense start

if(isset($_POST["edit_expense"]))
{
    $expense_type_name=$_POST["expense_type_name"];
    $edate=$_POST["edate"];
    $transaction_type=$_POST["transaction_type"];
    $amount=$_POST["amount"];
    $sql="update expense set expense_type_name='$expense_type_name',edate='$edate',transaction_type='$transaction_type',
    amount=$amount where ex_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Expenses updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a expense!"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }
}

//edit expense end

//manage expense start

class expense
{
  public function get_expense()
  {
    global $con;
    $sql="select * from expense";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $d=[];
        while($row=mysqli_fetch_assoc($result))
        {
            array_push($d,$row);
        }
        return $d;
    }
  }
  public function getId($id)
  {
    global $con;
    $sql="select * from expense where ex_id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    return $row;
  }
}

//manage expense end

//add staff start

if(isset($_POST["add_staff"]))
{
    $staff_id=$_POST["staff_id"];
    $staff_name=$_POST["staff_name"];
    $phone=$_POST["phone"];
    $aadhar=$_POST["aadhar"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $sql="insert into staff values (NULL,'$staff_id','$staff_name','$phone','$aadhar','$dob','$gender',
    '$address',NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Staff added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a staff"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }
    
}

//add staff end

//manage staff start

class staff
{
    public function get_staff()
    {
        global $con;
        $sql="select * from staff order by id desc";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
    public function get_staff_id($id)
    {
        global $con;
        $sql="select * from staff where id=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//manage staff end


//edit staff start

if(isset($_POST["edit_staff"]))
{
    $staff_id=$_POST["staff_id"];
    $staff_name=$_POST["staff_name"];
    $phone=$_POST["phone"];
    $aadhar=$_POST["aadhar"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];
    $sql="update staff set staff_id='$staff_id',staff_name='$staff_name',phone='$phone',aadhar='$aadhar',
    dob='$dob',gender='$gender',address='$address' where id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Staff updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a staff"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }
    
}

//edit staff end

//add salary start

if(isset($_POST["add_salary"]))
{
    $salary_month=$_POST["salary_month"];
    $staff_id=$_POST["staff_id"];
    $working_days=$_POST["working_days"];
    $per_day_salary=$_POST["per_day_salary"];
    $sql="insert into salary values (NULL,'$salary_month',$staff_id,$working_days,$per_day_salary,NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Salary added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a salary"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//add salary end

//manage salary start

class salary
{
    public function get_salary()
    {
        global $con;
        $sql="select * from salary inner join staff on salary.staff_id=staff.id order by salary.salary_id desc";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
    public function get_salary_id($id)
    {
        global $con;
        $sql="select * from salary where salary_id=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//manage salary end


//edit salary start

if(isset($_POST["edit_salary"]))
{
    $salary_month=$_POST["salary_month"];
    $staff_id=$_POST["staff_id"];
    $working_days=$_POST["working_days"];
    $per_day_salary=$_POST["per_day_salary"];
    $sql="update salary set salary_month='$salary_month',staff_id=$staff_id,working_days=$working_days,
    per_day_salary=$per_day_salary where salary_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Salary updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a salary"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//edit salary end

//add festival schedule start

if(isset($_POST["add_festival_schedule"]))
{
    $festival_name=$_POST["festival_name"];
    $date=$_POST["date"];
    $sql="insert into festival values (NULL,'$festival_name','$date',NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Festival added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to added a Festival"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//add festival schedule end

//manage festival start

class festival
{
    public function get_festival()
    {
        global $con;
        $sql="select * from festival order by festival_id desc";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
    public function get_festival_id($id)
    {
        global $con;
        $sql="select * from festival where festival_id=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//manage festival end

//edit festival schedule start

if(isset($_POST["edit_festival_schedule"]))
{
    $festival_name=$_POST["festival_name"];
    $date=$_POST["date"];
    $sql="update festival set festival_name='$festival_name',festival_date='$date' where festival_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Festival updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a Festival"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//edit festival schedule end

//add role start

if(isset($_POST["add_role"]))
{
    $role_name=$_POST["role_name"];
    $role_description=$_POST["role_description"];
    $role_permissions=implode(",",$_POST["role_permissions"]);
    $sql="insert into role values (NULL,'$role_name','$role_description','$role_permissions',NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Role added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a Role"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//add role end

//manage roles start



class role
{
    public function get_roles()
    {
        global $con;
        $sql="select * from role order by role_id desc";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
    public function get_role_id($id)
    {
        global $con;
        $sql="select * from role where role_id=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//manage roles end


//edit role start

if(isset($_POST["edit_role"]))
{
    $role_name=$_POST["role_name"];
    $role_description=$_POST["role_description"];
    $role_permissions=implode(",",$_POST["role_permissions"]);
    $sql="update role set role_name='$role_name',role_description='$role_description',
    role_permissions='$role_permissions' where role_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "Role Edited Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to edit a Role"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//edit role end



//add user start

if(isset($_POST["add_user"]))
{
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $role=$_POST["role"];
    $sql="insert into user values (NULL,'$first_name','$last_name','$email','$password','$role',NULL)";
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "User added Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to add a User"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//add user end

//manage user start



class user
{
    public function get_users()
    {
        global $con;
        $sql="select * from user order by user_id desc";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
    public function get_user_id($id)
    {
        global $con;
        $sql="select * from user where user_id=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//manage roles end

//edit user start

if(isset($_POST["edit_user"]))
{
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $role=$_POST["role"];
    $sql="update user set first_name='$first_name',last_name='$last_name',email='$email',password='$password',
    role='$role' where user_id=".$_GET["id"];
    if(mysqli_query($con,$sql))
    {
        ?>
            <script>
            Swal.fire({
            title: "Congratulations!",
            text: "User updated Successfully",
            icon: "success"
            });
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Error to update a User"
        });
        </script>
        <?php
        echo mysqli_error($con);
    }

}

//edit user end



//manage pass start



class pass
{
    public function get_pass()
    {
        global $con;
        $sql="select * from pass inner join seva on pass.seva_id=seva.seva_id";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
    public function get_pass_byId($id)
    {
        global $con;
        $sql="select * from pass inner join payments on pass.pass_id=payments.pass_id inner join seva on pass.seva_id=seva.seva_id where pass.pass_id=$id";
        $result=mysqli_query($con,$sql);
        return $row=mysqli_fetch_assoc($result);
    }
}

//manage pass end

//manage complaints start



class complaints
{
    public function get_complaints()
    {
        global $con;
        $sql="select * from complaint order by complaint_id desc";
        $result=mysqli_query($con,$sql);
        $a=[];
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                array_push($a,$row);
            }
        }
        return $a;
    }
   
}

//manage complaints end

?>