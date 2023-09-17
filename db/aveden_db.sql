-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 05:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aveden_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `agent_type` text NOT NULL,
  `house_category` text NOT NULL,
  `date_hired` date NOT NULL,
  `tel` int(11) NOT NULL,
  `company` text NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `website` text NOT NULL,
  `insta` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `agent_type`, `house_category`, `date_hired`, `tel`, `company`, `about`, `address`, `website`, `insta`, `twitter`) VALUES
(1, 'John Smith', 'Sales Agent', 'Residential', '2022-01-15', 0, '', '', '', '', '', ''),
(2, 'Jane Doe', 'Sales Agent', 'Commercial', '2021-11-05', 0, '', '', '', '', '', ''),
(3, 'Michael Johnson', 'Sales Agent', 'Residential', '2022-03-20', 0, '', '', '', '', '', ''),
(4, 'Emily Davis', 'Sales Agent', 'Commercial', '2021-08-10', 0, '', '', '', '', '', ''),
(5, 'David Brown', 'Sales Agent', 'Residential', '2022-02-28', 0, '', '', '', '', '', ''),
(6, 'Sarah Wilson', 'Sales Agent', 'Commercial', '2021-12-12', 0, '', '', '', '', '', ''),
(7, 'Robert Lee', 'Sales Agent', 'Residential', '2022-04-25', 0, '', '', '', '', '', ''),
(8, 'Jennifer Anderson', 'Sales Agent', 'Commercial', '2022-01-02', 0, '', '', '', '', '', ''),
(9, 'William Martin', 'Sales Agent', 'Residential', '2021-09-18', 0, '', '', '', '', '', ''),
(10, 'Linda Rodriguez', 'Sales Agent', 'Commercial', '2022-03-10', 0, '', '', '', '', '', ''),
(11, 'James Garcia', 'Sales Agent', 'Residential', '2021-07-08', 0, '', '', '', '', '', ''),
(12, 'Patricia Martinez', 'Sales Agent', 'Commercial', '2022-02-14', 0, '', '', '', '', '', ''),
(13, 'Richard Hernandez', 'Sales Agent', 'Residential', '2021-10-30', 0, '', '', '', '', '', ''),
(14, 'Karen Gonzalez', 'Sales Agent', 'Commercial', '2022-04-05', 0, '', '', '', '', '', ''),
(15, 'Charles Wilson', 'Sales Agent', 'Residential', '2021-12-22', 0, '', '', '', '', '', ''),
(16, 'Mary White', 'Sales Agent', 'Commercial', '2022-03-15', 0, '', '', '', '', '', ''),
(17, 'Thomas Lewis', 'Sales Agent', 'Residential', '2021-08-27', 0, '', '', '', '', '', ''),
(18, 'Maria Hall', 'Sales Agent', 'Commercial', '2022-01-09', 0, '', '', '', '', '', ''),
(19, 'Daniel Young', 'Sales Agent', 'Residential', '2021-11-30', 0, '', '', '', '', '', ''),
(20, 'Nancy Harris', 'Sales Agent', 'Commercial', '2022-04-20', 0, '', '', '', '', '', ''),
(21, 'Matthew Scott', 'Sales Agent', 'Residential', '2021-09-04', 0, '', '', '', '', '', ''),
(22, 'Susan King', 'Sales Agent', 'Commercial', '2022-02-10', 0, '', '', '', '', '', ''),
(23, 'Paul Walker', 'Sales Agent', 'Residential', '2021-07-20', 0, '', '', '', '', '', ''),
(24, 'Lisa Adams', 'Sales Agent', 'Commercial', '2022-03-05', 0, '', '', '', '', '', ''),
(25, 'Mark Turner', 'Sales Agent', 'Residential', '2021-10-14', 0, '', '', '', '', '', ''),
(26, 'Betty Wright', 'Sales Agent', 'Commercial', '2022-01-25', 0, '', '', '', '', '', ''),
(27, 'Joseph Parker', 'Sales Agent', 'Residential', '2021-12-07', 0, '', '', '', '', '', ''),
(28, 'Dorothy Cook', 'Sales Agent', 'Commercial', '2022-04-15', 0, '', '', '', '', '', ''),
(29, 'Kevin Hall', 'Sales Agent', 'Residential', '2021-08-01', 0, '', '', '', '', '', ''),
(30, 'Kimberly Evans', 'Sales Agent', 'Commercial', '2022-02-20', 0, '', '', '', '', '', ''),
(31, 'Edward Murphy', 'Sales Agent', 'Residential', '2021-11-15', 0, '', '', '', '', '', ''),
(32, 'Donna Scott', 'Sales Agent', 'Commercial', '2022-03-25', 0, '', '', '', '', '', ''),
(33, 'Ronald Carter', 'Sales Agent', 'Residential', '2021-09-11', 0, '', '', '', '', '', ''),
(34, 'Carol Perez', 'Sales Agent', 'Commercial', '2022-01-18', 0, '', '', '', '', '', ''),
(35, 'George Adams', 'Sales Agent', 'Residential', '2021-07-28', 0, '', '', '', '', '', ''),
(36, 'Laura Morris', 'Sales Agent', 'Commercial', '2022-02-05', 0, '', '', '', '', '', ''),
(37, 'Kenneth Turner', 'Sales Agent', 'Residential', '2021-10-02', 0, '', '', '', '', '', ''),
(38, 'Margaret Ramirez', 'Sales Agent', 'Commercial', '2022-04-10', 0, '', '', '', '', '', ''),
(39, 'Steven Price', 'Sales Agent', 'Residential', '2021-12-29', 0, '', '', '', '', '', ''),
(40, 'Amanda Bennett', 'Sales Agent', 'Commercial', '2022-03-30', 0, '', '', '', '', '', ''),
(41, 'Brian Roberts', 'Sales Agent', 'Residential', '2021-08-15', 0, '', '', '', '', '', ''),
(42, 'Pamela Cooper', 'Sales Agent', 'Commercial', '2022-01-31', 0, '', '', '', '', '', ''),
(43, 'Timothy Morris', 'Sales Agent', 'Residential', '2021-11-20', 0, '', '', '', '', '', ''),
(44, 'Jessica Foster', 'Sales Agent', 'Commercial', '2022-04-30', 0, '', '', '', '', '', ''),
(45, 'Ronald Nelson', 'Sales Agent', 'Residential', '2021-09-25', 0, '', '', '', '', '', ''),
(46, 'Heather Hayes', 'Sales Agent', 'Commercial', '2022-02-25', 0, '', '', '', '', '', ''),
(47, 'Larry Turner', 'Sales Agent', 'Residential', '2021-07-15', 0, '', '', '', '', '', ''),
(48, 'Deborah Simmons', 'Sales Agent', 'Commercial', '2022-01-06', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `client_id` text NOT NULL,
  `property_name` text NOT NULL,
  `init_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_booked` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `property_id`, `client_id`, `property_name`, `init_date`, `end_date`, `date_booked`, `status`) VALUES
(60, 1, 'sponge@admin.com', 'Lakefront', '2023-09-28', '2023-09-20', '2023-09-09', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category` text DEFAULT NULL,
  `listed_in` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `county` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `guest` int(10) NOT NULL,
  `street` text DEFAULT NULL,
  `room_size` int(11) DEFAULT NULL,
  `no_room` int(11) DEFAULT NULL,
  `no_bedroom` int(11) DEFAULT NULL,
  `no_bathroom` int(11) DEFAULT NULL,
  `garage_size` int(11) DEFAULT NULL,
  `structure_type` int(11) DEFAULT NULL,
  `amenities` text DEFAULT NULL,
  `featured` text DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `description`, `category`, `listed_in`, `price`, `gallery`, `address`, `county`, `city`, `guest`, `street`, `room_size`, `no_room`, `no_bedroom`, `no_bathroom`, `garage_size`, `structure_type`, `amenities`, `featured`, `agent_id`, `status`, `date`) VALUES
(1, 'Cozy Apartment in Downtown', 'A comfortable apartment in the heart of the city.', 'Apartment', 'For Sale', 0, '', '123 Main St', 'County A', 'City A', 0, 'Main St', 800, 4, 2, 2, 1, 0, 'Swimming Pool, Gym, Balcony', '1', 1, 'Pending', '2023-09-01'),
(2, 'Spacious Family Home', 'A large family home with a beautiful garden.', 'House', 'For Sale', 0, '', '456 Oak Ave', 'County B', 'City B', 0, 'Oak Ave', 2000, 8, 4, 3, 2, 0, 'Backyard, Fireplace, Walk-in Closet', '0', 2, 'Pending', '2023-09-01'),
(3, 'Luxury Penthouse', 'A penthouse with stunning city views and top-notch amenities.', 'Apartment', 'For Sale', 0, '', '789 High St', 'County C', 'City C', 0, 'High St', 1500, 5, 3, 4, 3, 0, 'Swimming Pool, Sauna, Rooftop Garden', '1', 3, 'Pending', '2023-09-01'),
(4, 'Charming Cottage', 'A quaint cottage in a peaceful countryside setting.', 'House', 'For Sale', 0, '', '101 Forest Rd', 'County D', 'City D', 0, 'Forest Rd', 1200, 6, 3, 2, 1, 0, 'Garden, Fireplace, Patio', '0', 4, 'Pending', '2023-09-01'),
(5, 'Modern Loft with City View', 'A contemporary loft with an urban vibe.', 'Apartment', 'For Rent', 0, '', '222 Loft Ave', 'County E', 'City E', 0, 'Loft Ave', 1000, 2, 1, 1, 0, 0, 'Fitness Center, Balcony, Open Floor Plan', '1', 5, 'Pending', '2023-09-01'),
(6, 'Lakefront Retreat', 'A serene lakefront property perfect for relaxation.', 'House', 'For Sale', 0, '', '456 Lakeview Dr', 'County F', 'City F', 0, 'Lakeview Dr', 2500, 7, 4, 4, 2, 0, 'Boat Dock, Fireplace, Lake Access', '0', 6, 'Pending', '2023-09-01'),
(7, 'Downtown Condo', 'A modern condo in the heart of the city.', 'Apartment', 'For Sale', 0, '', '789 City Center', 'County G', 'City G', 0, 'City Center', 900, 3, 1, 2, 1, 0, 'Swimming Pool, Concierge, City View', '1', 7, 'Pending', '2023-09-01'),
(8, 'Rural Farmhouse', 'A charming farmhouse with acres of land.', 'House', 'For Sale', 0, '', '123 Farm Rd', 'County H', 'City H', 0, 'Farm Rd', 1800, 5, 3, 3, 2, 0, 'Barn, Pasture, Pond', '0', 8, 'Pending', '2023-09-01'),
(9, 'High-Rise Luxury Condo', 'An upscale condo in a prestigious high-rise building.', 'Apartment', 'For Sale', 0, '', '101 Sky Tower', 'County I', '', 0, 'Sky Tower', 2200, 4, 2, 3, 2, 0, 'Infinity Pool, Concierge, Skyline View', '1', 0, '', '2023-09-01'),
(10, 'Mountain View Cabin', 'A cozy cabin with breathtaking mountain views.', 'House', 'For Sale', 0, '', '456 Mountain Rd', 'County J', 'City J', 0, 'Mountain Rd', 1400, 4, 2, 2, 1, 0, 'Fireplace, Deck, Hiking Trails', '0', 0, '', '2023-09-01'),
(11, 'Beachfront Condo', 'An oceanfront condo with stunning sunset views.', 'Apartment', 'For Sale', 0, '', '789 Beach Blvd', 'County K', 'City K', 0, 'Beach Blvd', 1100, 3, 2, 2, 1, 0, 'Beach Access, Ocean View, Balcony', '1', 0, '', '2023-09-01'),
(12, 'Country Estate', 'A grand estate with a sprawling property.', 'House', 'For Sale', 0, '', '101 Manor Ln', 'County L', 'City L', 0, 'Manor Ln', 4000, 10, 6, 5, 3, 0, 'Pool, Tennis Court, Guest House', '1', 0, '', '2023-09-01'),
(13, 'Ski Chalet', 'A charming chalet in a ski resort area.', 'House', 'For Sale', 0, '', '456 Mountain View Dr', 'County M', 'City M', 0, 'Mountain View Dr', 1800, 5, 3, 2, 1, 0, 'Fireplace, Ski Access, Mountain View', '0', 0, '', '2023-09-01'),
(14, 'Downtown Loft', 'A stylish loft in the bustling downtown area.', 'Apartment', 'For Rent', 0, '', '789 Urban Way', 'County N', 'City N', 0, 'Urban Way', 1200, 3, 2, 2, 0, 0, 'Fitness Center, Rooftop Deck, City View', '1', 0, '', '2023-09-01'),
(15, 'Equestrian Ranch', 'A sprawling ranch with equestrian facilities.', 'House', 'For Sale', 0, '', '123 Ranch Rd', 'County O', 'City O', 0, 'Ranch Rd', 2500, 6, 4, 3, 3, 0, 'Barn, Riding Arena, Pasture', '0', 0, 'Processing', '2023-09-01'),
(16, 'Cozy Apartment in Downtown', 'A comfortable apartment in the heart of the city.', 'Apartment', 'For Sale', 0, '', '123 Main St', 'County A', 'City A', 0, 'Main St', 800, 4, 2, 2, 1, 0, 'Swimming Pool, Gym, Balcony', '1', 0, 'Processing', '2023-09-01'),
(17, 'Spacious Family Home', 'A large family home with a beautiful garden.', 'House', 'For Sale', 0, '', '456 Oak Ave', 'County B', 'City B', 0, 'Oak Ave', 2000, 8, 4, 3, 2, 0, 'Backyard, Fireplace, Walk-in Closet', '0', 0, 'Processing', '2023-09-01'),
(18, 'Luxury Penthouse', 'A penthouse with stunning city views and top-notch amenities.', 'Apartment', 'For Sale', 0, '', '789 High St', 'County C', 'City C', 0, 'High St', 1500, 5, 3, 4, 3, 0, 'Swimming Pool, Sauna, Rooftop Garden', '1', 0, 'Processing', '2023-09-01'),
(19, 'Charming Cottage', 'A quaint cottage in a peaceful countryside setting.', 'House', 'For Sale', 0, '', '101 Forest Rd', 'County D', 'City D', 0, 'Forest Rd', 1200, 6, 3, 2, 1, 0, 'Garden, Fireplace, Patio', '0', 0, 'Processing', '2023-09-01'),
(20, 'Modern Loft with City View', 'A contemporary loft with an urban vibe.', 'Apartment', 'For Rent', 0, '', '222 Loft Ave', 'County E', 'City E', 0, 'Loft Ave', 1000, 2, 1, 1, 0, 0, 'Fitness Center, Balcony, Open Floor Plan', '1', 0, 'Processing', '2023-09-01'),
(21, 'Lakefront Retreat', 'A serene lakefront property perfect for relaxation.', 'House', 'For Sale', 0, '', '456 Lakeview Dr', 'County F', 'City F', 0, 'Lakeview Dr', 2500, 7, 4, 4, 2, 0, 'Boat Dock, Fireplace, Lake Access', '0', 0, 'Processing', '2023-09-01'),
(22, 'Downtown Condo', 'A modern condo in the heart of the city.', 'Apartment', 'For Sale', 0, '', '789 City Center', 'County G', 'City G', 0, 'City Center', 900, 3, 1, 2, 1, 0, 'Swimming Pool, Concierge, City View', '1', 0, 'Processing', '2023-09-01'),
(23, 'Rural Farmhouse', 'A charming farmhouse with acres of land.', 'House', 'For Sale', 0, '', '123 Farm Rd', 'County H', 'City H', 0, 'Farm Rd', 1800, 5, 3, 3, 2, 0, 'Barn, Pasture, Pond', '0', 0, 'Processing', '2023-09-01'),
(24, 'High-Rise Luxury Condo', 'An upscale condo in a prestigious high-rise building.', 'Apartment', 'For Sale', 0, '', '101 Sky Tower', 'County I', 'City I', 0, 'Sky Tower', 2200, 4, 2, 3, 2, 0, 'Infinity Pool, Concierge, Skyline View', '1', 0, 'Processing', '2023-09-01'),
(25, 'Mountain View Cabin', 'A cozy cabin with breathtaking mountain views.', 'House', 'For Sale', 0, '', '456 Mountain Rd', 'County J', 'City J', 0, 'Mountain Rd', 1400, 4, 2, 2, 1, 0, 'Fireplace, Deck, Hiking Trails', '0', 0, 'Processing', '2023-09-01'),
(26, 'Beachfront Condo', 'An oceanfront condo with stunning sunset views.', 'Apartment', 'For Sale', 0, '', '789 Beach Blvd', 'County K', 'City K', 0, 'Beach Blvd', 1100, 3, 2, 2, 1, 0, 'Beach Access, Ocean View, Balcony', '1', 0, 'Processing', '2023-09-01'),
(27, 'Country Estate', 'A grand estate with a sprawling property.', 'House', 'For Sale', 0, '', '101 Manor Ln', 'County L', 'City L', 0, 'Manor Ln', 4000, 10, 6, 5, 3, 0, 'Pool, Tennis Court, Guest House', '1', 0, 'Processing', '2023-09-01'),
(28, 'Ski Chalet', 'A charming chalet in a ski resort area.', 'House', 'For Sale', 0, '', '456 Mountain View Dr', 'County M', 'City M', 0, 'Mountain View Dr', 1800, 5, 3, 2, 1, 0, 'Fireplace, Ski Access, Mountain View', '0', 0, 'Processing', '2023-09-01'),
(29, 'Downtown Loft', 'A stylish loft in the bustling downtown area.', 'Apartment', 'For Rent', 0, '', '789 Urban Way', 'County N', 'City N', 0, 'Urban Way', 1200, 3, 2, 2, 0, 0, 'Fitness Center, Rooftop Deck, City View', '1', 0, 'Published', '2023-09-01'),
(30, 'Equestrian Ranch', 'A sprawling ranch with equestrian facilities.', 'House', 'For Sale', 0, '', '123 Ranch Rd', 'County O', 'City O', 0, 'Ranch Rd', 2500, 6, 4, 3, 3, 0, 'Barn, Riding Arena, Pasture', '0', 0, 'Published', '2023-09-01'),
(31, 'Riverside Cabin', 'A cozy cabin by the river with fishing and boating access.', 'House', 'For Sale', 0, '', '456 Riverside Ln', 'County P', 'City P', 0, 'Riverside Ln', 1200, 4, 2, 2, 1, 0, 'River Access, Fireplace, Deck', '0', 0, 'Published', '2023-09-01'),
(32, 'Urban Condo with View', 'A stylish urban condo with panoramic city views.', 'Apartment', 'For Sale', 0, '', '789 Cityscape Dr', 'County Q', 'City Q', 0, 'Cityscape Dr', 1000, 2, 1, 1, 1, 0, 'City View, Gym, Rooftop Deck', '1', 0, 'Published', '2023-09-01'),
(33, 'Rustic Cabin in the Woods', 'A charming cabin nestled in the woods for nature lovers.', 'House', 'For Sale', 0, '', '101 Forest Retreat', 'County R', 'City R', 0, 'Forest Retreat', 800, 3, 1, 1, 0, 0, 'Nature Trail, Fireplace, Peaceful', '0', 0, 'Published', '2023-09-01'),
(34, 'Beachfront Villa', 'A luxurious beachfront villa with private access to the sand.', 'House', 'For Sale', 0, '', '123 Beach Haven', 'County S', 'City S', 0, 'Beach Haven', 2200, 5, 4, 4, 2, 0, 'Private Beach Access, Pool, Ocean View', '1', 0, 'Published', '2023-09-01'),
(35, 'Historic Mansion', 'A grand historic mansion with ornate architecture and gardens.', 'House', 'For Sale', 0, '', '789 Heritage Ave', 'County T', 'City T', 0, 'Heritage Ave', 5000, 12, 8, 6, 4, 0, 'Gardens, Ballroom, Historic Charm', '1', 0, 'Published', '2023-09-01'),
(36, 'Mountain Retreat Cabin', 'A secluded cabin in the mountains for a peaceful getaway.', 'House', 'For Sale', 0, '', '456 Mountain Hideaway', 'County U', 'City U', 0, 'Mountain Hideaway', 1000, 3, 1, 1, 0, 0, 'Hiking Trails, Fireplace, Mountain View', '0', 0, 'Published', '2023-09-01'),
(37, 'Modern City Loft', 'A contemporary loft with a sleek design in the city center.', 'Apartment', 'For Sale', 0, '', '101 Urban Oasis', 'County V', 'City V', 0, 'Urban Oasis', 1400, 3, 2, 2, 1, 0, 'City View, Gym, Modern Design', '1', 0, 'Published', '2023-09-01'),
(38, 'Seaside Bungalow', 'A charming seaside bungalow with ocean views and beach access.', 'House', 'For Sale', 0, '', '123 Ocean Retreat', 'County W', 'City W', 0, 'Ocean Retreat', 900, 3, 2, 1, 1, 0, 'Ocean View, Beach Access, Patio', '0', 0, 'Published', '2023-09-01'),
(39, 'Ranch Style Home', 'A comfortable ranch-style home with a large backyard.', 'House', 'For Sale', 0, '', '456 Ranch Haven', 'County X', 'City X', 0, 'Ranch Haven', 1600, 4, 3, 2, 2, 0, 'Spacious Yard, Fireplace, Quiet Neighborhood', '0', 0, 'Published', '2023-09-01'),
(40, 'Downtown Luxury Condo', 'An upscale condo in a prime downtown location.', 'Apartment', 'For Sale', 0, '', '789 Cityscape Plaza', 'County Y', 'City Y', 0, 'Cityscape Plaza', 1800, 3, 2, 3, 2, 0, 'City View, Gym, Concierge', '1', 0, 'Published', '2023-09-01'),
(41, 'Lakefront Chalet', 'A charming chalet on the shores of a tranquil lake.', 'House', 'For Sale', 0, '', '101 Lake Serenity', 'County Z', 'City Z', 0, 'Lake Serenity', 1200, 3, 2, 2, 1, 0, 'Lake View, Deck, Fishing', '0', 0, 'Published', '2023-09-01'),
(42, 'Suburban Family Home', 'A spacious family home in a quiet suburban neighborhood.', 'House', 'For Sale', 0, '', '456 Suburban Haven', 'County AA', 'City AA', 0, 'Suburban Haven', 2200, 5, 3, 3, 2, 0, 'Backyard, Fireplace, Family-Friendly', '0', 0, 'Published', '2023-09-01'),
(43, 'Aaaaa', 'Lorem ipsum', '2', '', 0, NULL, 'Hakairu', 'Kenya', 'California', 0, 'Ruiru', 400, 2, 1, 1, 2, 0, NULL, '0', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `email` text NOT NULL,
  `phone_no` int(13) DEFAULT NULL,
  `about_me` text DEFAULT NULL,
  `password` text NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'client',
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `lname`, `email`, `phone_no`, `about_me`, `password`, `role`, `created`) VALUES
(1, 'Monkey D. Luffy', 'Keke', 'Ghenkai', 'sponge@admin.com', 712346789, '', 'e10adc3949ba59abbe56e057f20f883e', 'client', '2023-09-03 11:05:49'),
(2, 'Superuser', 'Karoli', 'Onyango', 'superuser@aveden.com', 727358261, 'Calipso', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2023-09-03 11:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
