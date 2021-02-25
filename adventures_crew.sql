-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 09:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventures_crew`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dealer` varchar(50) NOT NULL DEFAULT 'RS Association',
  `price` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `about`, `image`, `dealer`, `price`, `place`, `address`, `mobile`, `email`) VALUES
(1, 'Roopkund Trek', 'A heaven for trekkers, but with a horrific twist as you head to the glacial Roopkund Lake. Yes, the path of this trek actually has hundreds of human skeletons scattered all over, especially near the edge of the lake. Now that’s what they call walking with the dead – a one of its own among all other adventure trips in India. With so many treks, Uttarakhand boasts as one of the best adventure sports destinations in India.', 'Activity1.jpg', 'RS Association', 3000, 'Uttarakhand', 'Debal, District - Chamoli, Pin - 246427', '+91 8006406293', 'roopkundtrek@uttarakhand.com'),
(2, 'Motorcycle Touring', 'Ladakh is undoubtedly one of the best destination for an adventure trip in India. If you really wish to explore the countryside with your best mates then go on a motorcycle tour. You can arrange your own touring path or you can join any motorcycle expedition like ‘The Raid De Himalaya’. The rally starts from Shimla and goes till Leh, crossing some of the spine chilling destinations to test your endurance! This is considered to be the best place for adventure sports in India by many explorers!', 'Activity2.jpg', 'RS Association', 9000, 'Shimla', 'Amar Niwas Boileauganj Near SBI Bank, Himachal Pradesh 171005', '098162 63555', 'motorcycletour@shimla.com'),
(3, 'Caving', 'Caving being one of the best adventure sports in India, Meghalaya, with its captivating caves is the go-to spot. Nestled among the waterfalls and green forests, these caves will definitely enthral you. So, pack your bags as you may be needing a lot of stuff along with some food in these remote caves. Don’t forget to pack some safety gear, you never know which wild friend you may meet on the way. Safe going guys!', 'Activity3.jpg', 'RS Association', 2000, 'Meghalaya', 'Cherrapunjee, Meghalaya 793108', '089256 125463', 'caving@meghalaya.com'),
(4, 'Parasailing', 'How about watching an Aerial view of Payyambalam beach, Kerala with your group of friends? It would be a thrilling experience to watch the blue Arabian Sea while sailing over it in sky. You can go up till 300 ft? Whoa! Now that’s some height!', 'Activity4.jpg', 'RS Association', 8000, 'Kerela', 'C/o Plyland, V.H.Road, Palakkad, Kerala 678001', '085641 256413', 'parasailing@kerela.com'),
(5, 'Fly Boarding', 'You go to Goa and don’t head for some water fun – kya yaar! Goa is one of the best places to do adventure sports in India. But water sports have taken a huge leap here with launch of internationally popular ‘Flyboarding’. Remember Hrithik Roshan steering across waves in the movie Bang Bang on a Flyboard? You too can repeat the crazy stint at Baina beach in Goa. However, taking Katrina Kaif along is still a distant dream!', 'Activity5.jpg', 'RS Association', 12000, 'Goa', 'Calangute, Goa', '0256541 25541', 'kalancute@goa.com'),
(6, 'Skydiving', 'Once in your life, you must have desired to fly freely like a bird. This is your chance! Go for skydiving and let yourself loose! Scared to risk your life? Send your friend ahead of you! Kidding. Go with an expert. Mysore is the best place to undertake this adventurous trip in India with fascinating view of blue sky and extreme greenery sprawled across the valley.', 'Activity6.jpg', 'RS Association', 25000, 'Mysore', 'Mysuru Airport, Mysuru, Karnataka 570001', '02564132565', 'skydiving@mysore.com'),
(7, 'Flying Fox', 'Travel above the high hills, valleys and rivers in Kerala during a captivating adventure sport called Flying Fox. Looks like a scene straight out of a Hollywood movie – you’re tied to a high lying rope that’s tied to the two opposite mountain tops. You swing from one end and reach the other and bingo! You’ve saved the world :P This sport will surely make your vacation extremely adventurous. You may also enjoy trampoline, mountaineering and a few waters sports in Kerala.', 'Activity7.jpg', 'RS Association', 6000, 'Kerela', 'Wonder Valley Adventure and Amusement Park, Munnar', '052634 215463', 'flyfox@kwerela.com'),
(8, 'Rock Climbing', 'With bold terrain, Satpura mountain range in Madhya Pradesh offers remarkable rock climbing extravaganza. Along with Satpura other places in Madhya Pradesh like Pachmarhi, Jabalpur and Chanderi are also extremely interesting places if your gang enjoys rock sports, mountain climbing and such adventure sports in India.', 'Activity8.jpg', 'RS Association', 6500, 'Satpura Mountain', 'Madhya Pradesh 450331', '025641236598', 'satpura@mountain.com'),
(9, 'Bungee Jumping', 'With the highest, 83-freaking-meters of Bungee Jumping podium, Rishikesh is one of the best destinations to enjoy the ecstasy of weightlessness. This is your official ticket to get high – literally! Take delight in this adventure with your friends, while soaking in the pristine water on Ganges! You can indulge in other adventure sports in Rishikesh, too like river rafting, kayaking, mountain climbing, and paragliding.', 'Activity9.jpg', 'RS Association', 13500, 'Rishikesh', 'Rishikesh Temple', '02641256895', 'rishikesh@rs.com'),
(10, 'Scuba Diving', 'Serene and secluded Barren Island in Andaman and Nicobar Islands offer adventurous scuba diving experience. Dive into crystal clear pristine water and savor the view of coral gardens and fascinating basalt formations that’ll stay in your memory for the longest time. It is a good spot to try adventure sports of India which pertains to water.', 'Activity10.jpg', 'RS Association', 65500, 'Andaman and Nicobar Island', 'Andaman and Nicobar Island', '65236541528', 'andaman@nicobar.com'),
(11, 'Paragliding', 'Bir Billing has become one of the popular adventure sports destinations in India because of paragliding. Located near Baijnath in Himachal Pradesh, Bir Billing is a small quaint town set in the verdant greenery of the mountains. What makes people visit this place is the exciting opportunity of paragliding. It is the second highest paragliding in the world after Chamonix in Europe. So, you have got to give this place some credit. Enjoy the breathtaking panoramas from the sky.', 'Activity11.jpg', 'RS Association', 12000, 'Himachal Pradesh', 'Baijnath, Himachal Pradesh', '8356412598', 'baijnath@paragliding.com'),
(12, 'Chadar Trek', 'Chadar Trek is not new information to people. The thrilling trek happens on Zanskar River in Ladakh during the winters when it is frozen. Leh is already one of the popular places for adventure sports in India. Trekkers and adventure enthusiasts come all the way to here to walk on the frozen river bed for 8 days till the point of the frozen waterfall. The temperature drops down below -30 degrees.', 'Activity12.jpg', 'RS Association', 3000, 'Ladakh', 'Zanskar River, Ladakh', '46521359856', 'zansskar@ladakh.com'),
(13, 'Kayaking', 'Kayaking is comparatively a new adventure sports in India who has recently caught on the popularity. If you like water sports, then this is something you may try. It is a single-person adventure sport which makes use of a small, narrow watercraft propelled by a double-bladed paddle. Devprayag in Karnataka is one of the adventure sports destinations in India where you can try kayaking. And, no, it is not similar to canoeing.', 'Activity13.jpg', 'RS Association', 5000, 'Devprayag', 'River Side, Devprayag', '7946132585', 'riverside@devpragyag.com'),
(14, 'Surfing', 'In case you want to try your hands on surfing, then Kovalam is probably one of the best adventure sports destinations in India. It is because there is a surf school. So, you can plan a vocational holiday and learn the skill of surfing like a pro. Even for pros, the sea offers thrilling waves to surf on in style. Plus, Kovalam is always a great place for an escape and it is cheap too.', 'Activity14.jpg', 'RS Association', 5600, 'Kanyakumari', 'Beach, Kanyakumari', '4565421549', 'kanyakumari@kovalam.com'),
(15, 'Mountain Biking', 'Do you know what the best way to escape into the wilderness is? It’s by riding a mountain bike. If you are an avid cyclist, then you must know how much thrill mountain biking gives you. You can explore a number of trails depending upon your grade and the scenery you want. The hills of Sikkim, Ladakh, and West Bengal offer numerous exciting trails for you to raid. If you are a beginner, you can choose easier trails.', 'Activity15.jpg', 'RS Association', 8000, 'Sikkim', 'Sikkim, Ladakh and West Bengal', '78986541256', 'bikes@westbengal.com'),
(16, 'Water Rafting', 'With the fun rapid waves calling from as far as Arunachal Pradesh, why wouldn you want to wait up for an adventure-packed vacation? The famous waves of Subansiri are perfect for your weekend thrilling experience with friends and family and get some exercise with the whole group. While you’re out and about in the waters, you can also keep your phones in the waterproof bag and stay carefree for the rest of the time.', 'Activity16.jpg', 'RS Association', 8500, 'Subhanshgiri', 'Jia Bharoli, Assam', '8349312526', 'riverrafting@jia.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nbooking` int(11) NOT NULL,
  `date` date NOT NULL,
  `nperson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `aid`, `username`, `nbooking`, `date`, `nperson`) VALUES
(14, 10, 'Pavanjain1996', 1, '2019-10-02', 1),
(15, 1, 'Pavanjain1996', 2, '2019-10-18', 5),
(16, 15, 'Pavanjain1996', 3, '2019-10-23', 6),
(17, 5, 'Pavanjain1996', 4, '2019-10-16', 2),
(18, 9, 'Pavanjain1996', 5, '2019-11-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `did` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`did`, `bid`, `name`) VALUES
(28, 14, 'Pavan Jain'),
(29, 15, 'Pavan Jain'),
(30, 15, 'Ritik Jain'),
(31, 15, 'Anshul Jain'),
(32, 15, 'Romesh Jain'),
(33, 15, 'Rahul Jain'),
(34, 16, 'Pavan Jain'),
(35, 16, 'Himanshu Rai'),
(36, 16, 'Hrithik Jain'),
(37, 16, 'Mahendra Rathore'),
(38, 16, 'Rohit Singh'),
(39, 16, 'Vivek jain'),
(40, 17, 'Pavan Jain'),
(41, 17, 'Jasmeet Kaur'),
(42, 18, 'Pavan Jain'),
(43, 18, 'Jasmeet Kaur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nbooking` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `gender`, `mobile`, `email`, `profile`, `username`, `password`, `nbooking`) VALUES
(4, 'Pavan Jain', 22, 'Male', '8349312393', '013pavanjain@gmail.com', 'Pic.jpg', 'Pavanjain1996', 'action123on', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
