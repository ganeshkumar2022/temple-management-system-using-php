-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 02:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temple`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'ganesh kumar', 'admin@gmail.com', '$2y$10$IsjqkCiHqDPkZdwcjCHTWeB1jJdGbMcOqWx4SRZFCsLPInh7m1oba');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `myimage` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `name`, `email`, `subject`, `cdate`, `mobile`, `myimage`, `status`, `reading_time`) VALUES
(7, 'ramus', 'ramu@gmail.com', 'water is not working', '2024-01-02', '9891234567', 'uploads/naruto.gif', 'pending', '2023-12-30 12:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `devotee`
--

CREATE TABLE `devotee` (
  `devotee_id` int(11) NOT NULL,
  `devotee_name` varchar(50) NOT NULL,
  `bdate` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `taluka_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'active',
  `registered_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devotee`
--

INSERT INTO `devotee` (`devotee_id`, `devotee_name`, `bdate`, `phone`, `religion`, `state_id`, `district_id`, `taluka_id`, `status`, `registered_time`) VALUES
(1, 'Ganesh kumar', '2001-02-10', '7867812345', 'Hindu', 1, 2, 2, 'active', '2023-11-28 16:15:45'),
(2, 'Raja', '2023-11-09', '9878912344', 'Christian', 1, 7, 4, 'active', '2023-11-28 16:15:49'),
(4, 'kaviya', '2023-10-31', '5645645654', 'Muslim', 1, 2, 2, 'active', '2023-11-28 16:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `did` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`did`, `state_id`, `district_name`, `reading_time`) VALUES
(2, 1, 'Madurai', '2023-11-25 16:44:59'),
(3, 1, 'Theni', '2023-11-25 16:45:09'),
(6, 1, 'virudhunagar', '2023-11-27 15:27:31'),
(7, 1, 'tiruchi', '2023-11-27 15:27:40'),
(8, 2, 'bengalore', '2023-11-27 15:32:32');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `ex_id` int(11) NOT NULL,
  `expense_type_name` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `transaction_type` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `ereading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`ex_id`, `expense_type_name`, `edate`, `transaction_type`, `amount`, `ereading_time`) VALUES
(2, 'Cocounuts', '2023-12-21', 'Cash', 200, '2023-12-16 03:00:46'),
(3, 'festival', '2023-12-21', 'Phonepe', 500, '2023-12-16 03:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

CREATE TABLE `festival` (
  `festival_id` int(11) NOT NULL,
  `festival_name` varchar(50) NOT NULL,
  `festival_date` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`festival_id`, `festival_name`, `festival_date`, `reading_time`) VALUES
(1, 'Diwali', '2023-12-21', '2023-12-20 01:07:33'),
(2, 'Pongal', '2023-12-22', '2023-12-20 01:08:10'),
(4, 'Sivarathiri', '2023-12-26', '2023-12-20 01:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `in_id` int(11) NOT NULL,
  `receipt_no` varchar(10) NOT NULL,
  `rdate` varchar(30) NOT NULL,
  `devotee_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `income_type_id` int(11) NOT NULL,
  `seva_id` int(11) NOT NULL,
  `charge` int(11) NOT NULL,
  `ireading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`in_id`, `receipt_no`, `rdate`, `devotee_id`, `phone`, `address`, `payment_type`, `income_type_id`, `seva_id`, `charge`, `ireading_time`) VALUES
(1, 'R-no234', '2023-12-15', 1, '7896712345', 'chennai', 'Cash', 1, 1, 300, '2023-12-14 01:40:50'),
(2, 'R-no235', '2023-12-15', 2, '9898934578', 'bombay', 'Googlepay', 2, 3, 500, '2023-12-14 01:41:55'),
(4, 'R-no237', '2023-12-14', 1, '7867812345', 'Madurai', 'Phonepe', 1, 3, 500, '2023-12-15 00:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `income_type`
--

CREATE TABLE `income_type` (
  `income_type_id` int(11) NOT NULL,
  `income_type_name` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `income_type`
--

INSERT INTO `income_type` (`income_type_id`, `income_type_name`, `reading_time`) VALUES
(1, 'Pooja Income', '2023-12-11 01:19:03'),
(2, 'Deepavali Income', '2023-12-11 01:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `pass_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `seva_id` int(11) NOT NULL,
  `charge` int(11) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `devotee_name` varchar(70) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `proof_type` varchar(50) NOT NULL,
  `proof_no` varchar(50) NOT NULL,
  `no_of_persons` int(11) NOT NULL,
  `preading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`pass_id`, `name`, `email`, `seva_id`, `charge`, `mobile`, `devotee_name`, `age`, `gender`, `proof_type`, `proof_no`, `no_of_persons`, `preading_time`, `payment_status`) VALUES
(3, 'ganesh', 'ganesh@gmail.com', 1, 1500, '8989312345', 'Raja', 21, 'male', 'Aadhar card', '86748723443', 0, '2023-12-29 17:01:51', 'pending'),
(4, 'ganesh', 'ganesh@gmail.com', 1, 300, '77467467', 'Raja', 22, 'male', 'Pan card', '56456456456', 5, '2023-12-29 17:04:37', 'pending'),
(5, 'raja', 'raja@gmail.com', 3, 500, '653534534543', 'kaviya', 22, 'male', 'Aadhar card', '21134243242334', 5, '2023-12-30 12:33:40', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `pass_id` int(11) NOT NULL,
  `paid_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`pid`, `name`, `email`, `price`, `payment_id`, `order_id`, `pass_id`, `paid_time`) VALUES
(1, 'raja', 'raja@gmail.com', 2500, 'pay_NIYkA3MQ64g5rq', 'order_NIYg6vt2O3Xnk7', 5, '2023-12-30 12:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_description` varchar(100) NOT NULL,
  `role_permissions` text NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_description`, `role_permissions`, `reading_time`) VALUES
(3, 'Assistant', 'Add seva module', 'Seva,Pass', '2023-12-22 01:13:25'),
(4, 'Administrator', 'Manage all modules', 'Devotee,Seva,Income,Manage master,Pass,Complaints,Reports', '2023-12-22 01:14:09'),
(5, 'dummy', 'xcxzc', 'Devotee', '2023-12-22 01:15:34'),
(9, 'Manager', 'manager role', 'Seva,Income,Pass', '2023-12-28 01:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_month` varchar(50) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `working_days` int(11) NOT NULL,
  `per_day_salary` int(11) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `salary_month`, `staff_id`, `working_days`, `per_day_salary`, `reading_time`) VALUES
(1, '2023-12', 1, 23, 200, '2023-12-18 15:04:00'),
(2, '2023-11', 2, 25, 300, '2023-12-18 15:04:30'),
(3, '2023-08', 4, 22, 250, '2023-12-18 15:04:42'),
(5, '2023-11', 2, 11, 200, '2023-12-18 15:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `devotee_id` int(11) NOT NULL,
  `seva_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `devotee_id`, `seva_id`, `date`, `reading_time`) VALUES
(5, 2, 1, '2023-12-14', '2023-12-08 15:31:40'),
(6, 4, 3, '2023-12-13', '2023-12-10 02:11:33'),
(8, 4, 5, '2023-12-27', '2023-12-26 03:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `seva`
--

CREATE TABLE `seva` (
  `seva_id` int(11) NOT NULL,
  `seva_name` varchar(50) NOT NULL,
  `charge` varchar(50) NOT NULL,
  `no_of_person` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seva`
--

INSERT INTO `seva` (`seva_id`, `seva_name`, `charge`, `no_of_person`, `reading_time`) VALUES
(1, 'Kalyanam', '300', '1', '2023-12-02 01:36:04'),
(3, 'Thiruvila', '500', '1', '2023-12-08 14:33:43'),
(5, 'annathanam', '250', '1', '2023-12-26 03:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(30) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `aadhar` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `staff_name`, `phone`, `aadhar`, `dob`, `gender`, `address`, `reading_time`) VALUES
(1, 'E-01', 'Swetha', '8978912345', '7896789123455', '2023-12-18', 'Female', 'Chennai', '2023-12-17 11:31:59'),
(2, 'E-02', 'Ramya', '9879879843', '23134677783223', '2023-12-13', 'Female', 'Theni', '2023-12-17 11:32:37'),
(3, 'E-03', 'Raja', '7675612345', '53534553455345', '2023-12-19', 'Male', 'Virudhunagar', '2023-12-17 11:33:14'),
(4, 'E-04', 'Lalitha', '7912345678', '3213451234', '2023-12-20', 'Female', 'Mumbai', '2023-12-17 11:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(11) NOT NULL,
  `state_name` varchar(60) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `state_name`, `reading_time`) VALUES
(1, 'Tamilnadu', '2023-11-23 16:25:45'),
(2, 'Karnataka', '2023-11-23 16:27:05'),
(3, 'Andra pradesh', '2023-11-23 16:31:51'),
(4, 'Gujarat', '2023-11-25 00:09:16'),
(5, 'Punjab', '2023-11-24 15:25:22'),
(7, 'Delhi', '2023-12-23 01:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `tid` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `taluka_name` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`tid`, `state_id`, `district_id`, `taluka_name`, `reading_time`) VALUES
(2, 1, 2, 'Mettupalayam', '2023-11-26 05:13:31'),
(4, 1, 7, 'soolayur', '2023-11-27 15:28:21'),
(6, 1, 6, 'sattur', '2023-11-27 15:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`, `reading_time`) VALUES
(1, 'ganesh', 'kumar', 'ganesh@gmail.com', '12345', 'Assistant', '2023-12-23 01:40:51'),
(5, 'raja', 's', 'raja@gmail.com', '123', 'Administrator', '2023-12-23 01:45:04'),
(7, 'Mahi', 'ew', 'mahi@gmail.com', 'mahi', 'dummy', '2023-12-23 02:10:06'),
(10, 'nishitha', 's', 'nishitha@gmail.com', 'nishi', 'Manager', '2023-12-28 02:37:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `devotee`
--
ALTER TABLE `devotee`
  ADD PRIMARY KEY (`devotee_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `festival`
--
ALTER TABLE `festival`
  ADD PRIMARY KEY (`festival_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `income_type`
--
ALTER TABLE `income_type`
  ADD PRIMARY KEY (`income_type_id`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`pass_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `seva`
--
ALTER TABLE `seva`
  ADD PRIMARY KEY (`seva_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `devotee`
--
ALTER TABLE `devotee`
  MODIFY `devotee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `festival`
--
ALTER TABLE `festival`
  MODIFY `festival_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `income_type`
--
ALTER TABLE `income_type`
  MODIFY `income_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pass`
--
ALTER TABLE `pass`
  MODIFY `pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seva`
--
ALTER TABLE `seva`
  MODIFY `seva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
