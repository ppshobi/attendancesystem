<?php
    require_once('app/User.php');
   $user_level=User::getUserLevel(Auth::getuserid());

   if ($user_level==2) {
   
?>
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Dashboard Super Admin</span>
            </span>
           
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Departments</span>
            </span>
            <ul>
                <li><a href="add-department.php">Add a Department</a></li>
                <li><a href="manage-department.php">Manage</a></li>
                
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Students</span>
            </span>
            <ul>
                <li><a href="add-student.php">Add a Student</a></li>
                <li><a href="manage-student.php">Manage</a></li>
                
            </ul>

       </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Teachers</span>
            </span>
            <ul>
                <li><a href="add-teacher.php">Add a Teacher</a></li>
                <li><a href="manage-teacher.php">Manage</a></li>
                
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">HOD</span>
            </span>
            <ul>
                <li><a href="add-hod.php">Add a HOD</a></li>
                <li><a href="manage-hod.php">Manage</a></li>
                
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Binding</span>
            </span>
            <ul>
                <li><a href="bind-teacher-perieds.php">Bind Teachers to Perieds</a></li>
            </ul>
        </li>
         <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Users</span>
            </span>
            <ul>
                <li><a href="add-user.php">Add User</a></li>
                <li><a href="manage-users.php">Manage Users</a></li>
                
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Reports</span>
            </span>
            <ul>
                <li><a href="report-department.php">Get Department Wise Report for a date</a></li>
                <li><a href="report-batch-wise.php">Get Batch Wise Report</a></li>
                <li><a href="teacher-wise-report.php">Get Teacher Wise Report</a></li>
                <li><a href="student-report.php">Get Student Report</a></li>
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Reset</span>
            </span>
            <ul>
                <li><a href="#">Year Change</a></li>
                <li><a href="semester-change.php">Semester change</a></li>
                <li><a href="backup.php">Backup</a></li>
                
            </ul>
        </li>
       
    </ul>
 
</nav><!--.side-menu-->
<?php }elseif($user_level == 1) { ?>
<!-- Hod Menu -->
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Dashboard HOD</span>
            </span>
           
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Manage Working Days</span>
            </span>
            <ul>
                <li><a href="manage-dept-working-day.php">Manage Days</a></li>
                
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Students</span>
            </span>
            <ul>
                <li><a href="add-student.php">Add a Student</a></li>
                <li><a href="manage-student.php">Manage</a></li>
                
            </ul>

       </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Teachers</span>
            </span>
            <ul>
                <li><a href="add-teacher.php">Add a Teacher</a></li>
                <li><a href="manage-teacher.php">Manage</a></li>
                
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Binding</span>
            </span>
            <ul>
                <li><a href="bind-teacher-perieds.php">Bind Teachers to Perieds</a></li>
            </ul>
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Reports</span>
            </span>
            <ul>
                <li><a href="report-department.php">Get Department Wise Report for a date</a></li>
                <li><a href="report-batch-wise.php">Get Batch Wise Report</a></li>
                <li><a href="teacher-wise-report.php">Get Teacher Wise Report</a></li>
                <li><a href="student-report.php">Get Student Report</a></li>
            </ul>
        </li>
       
    </ul>
</nav><!--.side-menu-->
<?php } else { ?>

<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Dashboard Teacher</span>
            </span>
           
        </li>
        <li class="grey with-sub">
            <span>
                <i class="font-icon font-icon-dashboard"></i>
                <span class="lbl">Attendance</span>
            </span>
            <ul>
                <li><a href="mark-attendance.php">Todays Attendance</a></li>
                <li><a href="attendance-date.php">Mark attendace for a date</a></li>
                <li><a href="manage-student.php">Manage</a></li>
                
            </ul>

       </li>       
    </ul>
</nav><!--.side-menu-->
<?php } ?>