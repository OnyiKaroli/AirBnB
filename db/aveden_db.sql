-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 06:58 PM
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
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `agent_type`, `house_category`, `date_hired`, `tel`) VALUES
(1, 'John Smith', 'Sales Agent', 'Residential', '2022-01-15', 0),
(2, 'Jane Doe', 'Sales Agent', 'Commercial', '2021-11-05', 0),
(3, 'Michael Johnson', 'Sales Agent', 'Residential', '2022-03-20', 0),
(4, 'Emily Davis', 'Sales Agent', 'Commercial', '2021-08-10', 0),
(5, 'David Brown', 'Sales Agent', 'Residential', '2022-02-28', 0),
(6, 'Sarah Wilson', 'Sales Agent', 'Commercial', '2021-12-12', 0),
(7, 'Robert Lee', 'Sales Agent', 'Residential', '2022-04-25', 0),
(8, 'Jennifer Anderson', 'Sales Agent', 'Commercial', '2022-01-02', 0),
(9, 'William Martin', 'Sales Agent', 'Residential', '2021-09-18', 0),
(10, 'Linda Rodriguez', 'Sales Agent', 'Commercial', '2022-03-10', 0),
(11, 'James Garcia', 'Sales Agent', 'Residential', '2021-07-08', 0),
(12, 'Patricia Martinez', 'Sales Agent', 'Commercial', '2022-02-14', 0),
(13, 'Richard Hernandez', 'Sales Agent', 'Residential', '2021-10-30', 0),
(14, 'Karen Gonzalez', 'Sales Agent', 'Commercial', '2022-04-05', 0),
(15, 'Charles Wilson', 'Sales Agent', 'Residential', '2021-12-22', 0),
(16, 'Mary White', 'Sales Agent', 'Commercial', '2022-03-15', 0),
(17, 'Thomas Lewis', 'Sales Agent', 'Residential', '2021-08-27', 0),
(18, 'Maria Hall', 'Sales Agent', 'Commercial', '2022-01-09', 0),
(19, 'Daniel Young', 'Sales Agent', 'Residential', '2021-11-30', 0),
(20, 'Nancy Harris', 'Sales Agent', 'Commercial', '2022-04-20', 0),
(21, 'Matthew Scott', 'Sales Agent', 'Residential', '2021-09-04', 0),
(22, 'Susan King', 'Sales Agent', 'Commercial', '2022-02-10', 0),
(23, 'Paul Walker', 'Sales Agent', 'Residential', '2021-07-20', 0),
(24, 'Lisa Adams', 'Sales Agent', 'Commercial', '2022-03-05', 0),
(25, 'Mark Turner', 'Sales Agent', 'Residential', '2021-10-14', 0),
(26, 'Betty Wright', 'Sales Agent', 'Commercial', '2022-01-25', 0),
(27, 'Joseph Parker', 'Sales Agent', 'Residential', '2021-12-07', 0),
(28, 'Dorothy Cook', 'Sales Agent', 'Commercial', '2022-04-15', 0),
(29, 'Kevin Hall', 'Sales Agent', 'Residential', '2021-08-01', 0),
(30, 'Kimberly Evans', 'Sales Agent', 'Commercial', '2022-02-20', 0),
(31, 'Edward Murphy', 'Sales Agent', 'Residential', '2021-11-15', 0),
(32, 'Donna Scott', 'Sales Agent', 'Commercial', '2022-03-25', 0),
(33, 'Ronald Carter', 'Sales Agent', 'Residential', '2021-09-11', 0),
(34, 'Carol Perez', 'Sales Agent', 'Commercial', '2022-01-18', 0),
(35, 'George Adams', 'Sales Agent', 'Residential', '2021-07-28', 0),
(36, 'Laura Morris', 'Sales Agent', 'Commercial', '2022-02-05', 0),
(37, 'Kenneth Turner', 'Sales Agent', 'Residential', '2021-10-02', 0),
(38, 'Margaret Ramirez', 'Sales Agent', 'Commercial', '2022-04-10', 0),
(39, 'Steven Price', 'Sales Agent', 'Residential', '2021-12-29', 0),
(40, 'Amanda Bennett', 'Sales Agent', 'Commercial', '2022-03-30', 0),
(41, 'Brian Roberts', 'Sales Agent', 'Residential', '2021-08-15', 0),
(42, 'Pamela Cooper', 'Sales Agent', 'Commercial', '2022-01-31', 0),
(43, 'Timothy Morris', 'Sales Agent', 'Residential', '2021-11-20', 0),
(44, 'Jessica Foster', 'Sales Agent', 'Commercial', '2022-04-30', 0),
(45, 'Ronald Nelson', 'Sales Agent', 'Residential', '2021-09-25', 0),
(46, 'Heather Hayes', 'Sales Agent', 'Commercial', '2022-02-25', 0),
(47, 'Larry Turner', 'Sales Agent', 'Residential', '2021-07-15', 0),
(48, 'Deborah Simmons', 'Sales Agent', 'Commercial', '2022-01-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `listed_in` text NOT NULL,
  `label_price` float NOT NULL,
  `tax_rate` float NOT NULL,
  `price` float NOT NULL,
  `gallery` text NOT NULL,
  `video_type` text NOT NULL,
  `link` text NOT NULL,
  `address` text NOT NULL,
  `county` text NOT NULL,
  `city` text NOT NULL,
  `street` text NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `room_size` int(11) NOT NULL,
  `no_room` int(11) NOT NULL,
  `no_bedroom` int(11) NOT NULL,
  `no_bathroom` int(11) NOT NULL,
  `garage_size` int(11) NOT NULL,
  `structure_type` int(11) NOT NULL,
  `no_floor` text NOT NULL,
  `amenities` text NOT NULL,
  `featured` text NOT NULL,
  `agent_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `description`, `category`, `listed_in`, `label_price`, `tax_rate`, `price`, `gallery`, `video_type`, `link`, `address`, `county`, `city`, `street`, `latitude`, `longitude`, `room_size`, `no_room`, `no_bedroom`, `no_bathroom`, `garage_size`, `structure_type`, `no_floor`, `amenities`, `featured`, `agent_id`, `date`) VALUES
(1, 'Cozy Apartment in Downtown', 'A comfortable apartment in the heart of the city.', 'Apartment', 'For Sale', 0, 0.05, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=12345', '123 Main St', 'County A', 'City A', 'Main St', 41, -74, 800, 4, 2, 2, 1, 0, '5', 'Swimming Pool, Gym, Balcony', '1', 1, '2023-09-01'),
(2, 'Spacious Family Home', 'A large family home with a beautiful garden.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/67890', '456 Oak Ave', 'County B', 'City B', 'Oak Ave', 34, -118, 2000, 8, 4, 3, 2, 0, '2', 'Backyard, Fireplace, Walk-in Closet', '0', 2, '2023-09-01'),
(3, 'Luxury Penthouse', 'A penthouse with stunning city views and top-notch amenities.', 'Apartment', 'For Sale', 0, 0.04, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=67890', '789 High St', 'County C', 'City C', 'High St', 52, 0, 1500, 5, 3, 4, 3, 0, '10', 'Swimming Pool, Sauna, Rooftop Garden', '1', 3, '2023-09-01'),
(4, 'Charming Cottage', 'A quaint cottage in a peaceful countryside setting.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/12345', '101 Forest Rd', 'County D', 'City D', 'Forest Rd', 42, -71, 1200, 6, 3, 2, 1, 0, '1', 'Garden, Fireplace, Patio', '0', 4, '2023-09-01'),
(5, 'Modern Loft with City View', 'A contemporary loft with an urban vibe.', 'Apartment', 'For Rent', 0, 0.07, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=23456', '222 Loft Ave', 'County E', 'City E', 'Loft Ave', 34, -118, 1000, 2, 1, 1, 0, 0, '3', 'Fitness Center, Balcony, Open Floor Plan', '1', 5, '2023-09-01'),
(6, 'Lakefront Retreat', 'A serene lakefront property perfect for relaxation.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/34567', '456 Lakeview Dr', 'County F', 'City F', 'Lakeview Dr', 38, -122, 2500, 7, 4, 4, 2, 0, '2', 'Boat Dock, Fireplace, Lake Access', '0', 6, '2023-09-01'),
(7, 'Downtown Condo', 'A modern condo in the heart of the city.', 'Apartment', 'For Sale', 0, 0.06, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=56789', '789 City Center', 'County G', 'City G', 'City Center', 41, -74, 900, 3, 1, 2, 1, 0, '6', 'Swimming Pool, Concierge, City View', '1', 7, '2023-09-01'),
(8, 'Rural Farmhouse', 'A charming farmhouse with acres of land.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/45678', '123 Farm Rd', 'County H', 'City H', 'Farm Rd', 42, -88, 1800, 5, 3, 3, 2, 0, '2', 'Barn, Pasture, Pond', '0', 8, '2023-09-01'),
(9, 'High-Rise Luxury Condo', 'An upscale condo in a prestigious high-rise building.', 'Apartment', 'For Sale', 0, 0.04, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=67890', '101 Sky Tower', 'County I', '', 'Sky Tower', 34, -118, 2200, 4, 2, 3, 2, 0, '15', 'Infinity Pool, Concierge, Skyline View', '1', 0, '2023-09-01'),
(10, 'Mountain View Cabin', 'A cozy cabin with breathtaking mountain views.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/78901', '456 Mountain Rd', 'County J', 'City J', 'Mountain Rd', 40, -106, 1400, 4, 2, 2, 1, 0, '2', 'Fireplace, Deck, Hiking Trails', '0', 0, '2023-09-01'),
(11, 'Beachfront Condo', 'An oceanfront condo with stunning sunset views.', 'Apartment', 'For Sale', 0, 0.05, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=23456', '789 Beach Blvd', 'County K', 'City K', 'Beach Blvd', 34, -118, 1100, 3, 2, 2, 1, 0, '8', 'Beach Access, Ocean View, Balcony', '1', 0, '2023-09-01'),
(12, 'Country Estate', 'A grand estate with a sprawling property.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/56789', '101 Manor Ln', 'County L', 'City L', 'Manor Ln', 39, -77, 4000, 10, 6, 5, 3, 0, '3', 'Pool, Tennis Court, Guest House', '1', 0, '2023-09-01'),
(13, 'Ski Chalet', 'A charming chalet in a ski resort area.', 'House', 'For Sale', 0, 0.03, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=34567', '456 Mountain View Dr', 'County M', 'City M', 'Mountain View Dr', 40, -106, 1800, 5, 3, 2, 1, 0, '2', 'Fireplace, Ski Access, Mountain View', '0', 0, '2023-09-01'),
(14, 'Downtown Loft', 'A stylish loft in the bustling downtown area.', 'Apartment', 'For Rent', 0, 0.08, 0, '', 'Vimeo', 'https://vimeo.com/67890', '789 Urban Way', 'County N', 'City N', 'Urban Way', 41, -74, 1200, 3, 2, 2, 0, 0, '5', 'Fitness Center, Rooftop Deck, City View', '1', 0, '2023-09-01'),
(15, 'Equestrian Ranch', 'A sprawling ranch with equestrian facilities.', 'House', 'For Sale', 0, 0.02, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=78901', '123 Ranch Rd', 'County O', 'City O', 'Ranch Rd', 42, -88, 2500, 6, 4, 3, 3, 0, '1', 'Barn, Riding Arena, Pasture', '0', 0, '2023-09-01'),
(16, 'Cozy Apartment in Downtown', 'A comfortable apartment in the heart of the city.', 'Apartment', 'For Sale', 0, 0.05, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=12345', '123 Main St', 'County A', 'City A', 'Main St', 41, -74, 800, 4, 2, 2, 1, 0, '5', 'Swimming Pool, Gym, Balcony', '1', 0, '2023-09-01'),
(17, 'Spacious Family Home', 'A large family home with a beautiful garden.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/67890', '456 Oak Ave', 'County B', 'City B', 'Oak Ave', 34, -118, 2000, 8, 4, 3, 2, 0, '2', 'Backyard, Fireplace, Walk-in Closet', '0', 0, '2023-09-01'),
(18, 'Luxury Penthouse', 'A penthouse with stunning city views and top-notch amenities.', 'Apartment', 'For Sale', 0, 0.04, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=67890', '789 High St', 'County C', 'City C', 'High St', 52, 0, 1500, 5, 3, 4, 3, 0, '10', 'Swimming Pool, Sauna, Rooftop Garden', '1', 0, '2023-09-01'),
(19, 'Charming Cottage', 'A quaint cottage in a peaceful countryside setting.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/12345', '101 Forest Rd', 'County D', 'City D', 'Forest Rd', 42, -71, 1200, 6, 3, 2, 1, 0, '1', 'Garden, Fireplace, Patio', '0', 0, '2023-09-01'),
(20, 'Modern Loft with City View', 'A contemporary loft with an urban vibe.', 'Apartment', 'For Rent', 0, 0.07, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=23456', '222 Loft Ave', 'County E', 'City E', 'Loft Ave', 34, -118, 1000, 2, 1, 1, 0, 0, '3', 'Fitness Center, Balcony, Open Floor Plan', '1', 0, '2023-09-01'),
(21, 'Lakefront Retreat', 'A serene lakefront property perfect for relaxation.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/34567', '456 Lakeview Dr', 'County F', 'City F', 'Lakeview Dr', 38, -122, 2500, 7, 4, 4, 2, 0, '2', 'Boat Dock, Fireplace, Lake Access', '0', 0, '2023-09-01'),
(22, 'Downtown Condo', 'A modern condo in the heart of the city.', 'Apartment', 'For Sale', 0, 0.06, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=56789', '789 City Center', 'County G', 'City G', 'City Center', 41, -74, 900, 3, 1, 2, 1, 0, '6', 'Swimming Pool, Concierge, City View', '1', 0, '2023-09-01'),
(23, 'Rural Farmhouse', 'A charming farmhouse with acres of land.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/45678', '123 Farm Rd', 'County H', 'City H', 'Farm Rd', 42, -88, 1800, 5, 3, 3, 2, 0, '2', 'Barn, Pasture, Pond', '0', 0, '2023-09-01'),
(24, 'High-Rise Luxury Condo', 'An upscale condo in a prestigious high-rise building.', 'Apartment', 'For Sale', 0, 0.04, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=67890', '101 Sky Tower', 'County I', 'City I', 'Sky Tower', 34, -118, 2200, 4, 2, 3, 2, 0, '15', 'Infinity Pool, Concierge, Skyline View', '1', 0, '2023-09-01'),
(25, 'Mountain View Cabin', 'A cozy cabin with breathtaking mountain views.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/78901', '456 Mountain Rd', 'County J', 'City J', 'Mountain Rd', 40, -106, 1400, 4, 2, 2, 1, 0, '2', 'Fireplace, Deck, Hiking Trails', '0', 0, '2023-09-01'),
(26, 'Beachfront Condo', 'An oceanfront condo with stunning sunset views.', 'Apartment', 'For Sale', 0, 0.05, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=23456', '789 Beach Blvd', 'County K', 'City K', 'Beach Blvd', 34, -118, 1100, 3, 2, 2, 1, 0, '8', 'Beach Access, Ocean View, Balcony', '1', 0, '2023-09-01'),
(27, 'Country Estate', 'A grand estate with a sprawling property.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/56789', '101 Manor Ln', 'County L', 'City L', 'Manor Ln', 39, -77, 4000, 10, 6, 5, 3, 0, '3', 'Pool, Tennis Court, Guest House', '1', 0, '2023-09-01'),
(28, 'Ski Chalet', 'A charming chalet in a ski resort area.', 'House', 'For Sale', 0, 0.03, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=34567', '456 Mountain View Dr', 'County M', 'City M', 'Mountain View Dr', 40, -106, 1800, 5, 3, 2, 1, 0, '2', 'Fireplace, Ski Access, Mountain View', '0', 0, '2023-09-01'),
(29, 'Downtown Loft', 'A stylish loft in the bustling downtown area.', 'Apartment', 'For Rent', 0, 0.08, 0, '', 'Vimeo', 'https://vimeo.com/67890', '789 Urban Way', 'County N', 'City N', 'Urban Way', 41, -74, 1200, 3, 2, 2, 0, 0, '5', 'Fitness Center, Rooftop Deck, City View', '1', 0, '2023-09-01'),
(30, 'Equestrian Ranch', 'A sprawling ranch with equestrian facilities.', 'House', 'For Sale', 0, 0.02, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=78901', '123 Ranch Rd', 'County O', 'City O', 'Ranch Rd', 42, -88, 2500, 6, 4, 3, 3, 0, '1', 'Barn, Riding Arena, Pasture', '0', 0, '2023-09-01'),
(31, 'Riverside Cabin', 'A cozy cabin by the river with fishing and boating access.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/12345', '456 Riverside Ln', 'County P', 'City P', 'Riverside Ln', 37, -119, 1200, 4, 2, 2, 1, 0, '2', 'River Access, Fireplace, Deck', '0', 0, '2023-09-01'),
(32, 'Urban Condo with View', 'A stylish urban condo with panoramic city views.', 'Apartment', 'For Sale', 0, 0.05, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=23456', '789 Cityscape Dr', 'County Q', 'City Q', 'Cityscape Dr', 33, -112, 1000, 2, 1, 1, 1, 0, '10', 'City View, Gym, Rooftop Deck', '1', 0, '2023-09-01'),
(33, 'Rustic Cabin in the Woods', 'A charming cabin nestled in the woods for nature lovers.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/34567', '101 Forest Retreat', 'County R', 'City R', 'Forest Retreat', 45, -76, 800, 3, 1, 1, 0, 0, '1', 'Nature Trail, Fireplace, Peaceful', '0', 0, '2023-09-01'),
(34, 'Beachfront Villa', 'A luxurious beachfront villa with private access to the sand.', 'House', 'For Sale', 0, 0.05, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=56789', '123 Beach Haven', 'County S', 'City S', 'Beach Haven', 28, -82, 2200, 5, 4, 4, 2, 0, '2', 'Private Beach Access, Pool, Ocean View', '1', 0, '2023-09-01'),
(35, 'Historic Mansion', 'A grand historic mansion with ornate architecture and gardens.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/67890', '789 Heritage Ave', 'County T', 'City T', 'Heritage Ave', 41, -74, 5000, 12, 8, 6, 4, 0, '4', 'Gardens, Ballroom, Historic Charm', '1', 0, '2023-09-01'),
(36, 'Mountain Retreat Cabin', 'A secluded cabin in the mountains for a peaceful getaway.', 'House', 'For Sale', 0, 0.03, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=78901', '456 Mountain Hideaway', 'County U', 'City U', 'Mountain Hideaway', 40, -106, 1000, 3, 1, 1, 0, 0, '1', 'Hiking Trails, Fireplace, Mountain View', '0', 0, '2023-09-01'),
(37, 'Modern City Loft', 'A contemporary loft with a sleek design in the city center.', 'Apartment', 'For Sale', 0, 0.04, 0, '', 'Vimeo', 'https://vimeo.com/12345', '101 Urban Oasis', 'County V', 'City V', 'Urban Oasis', 34, -118, 1400, 3, 2, 2, 1, 0, '6', 'City View, Gym, Modern Design', '1', 0, '2023-09-01'),
(38, 'Seaside Bungalow', 'A charming seaside bungalow with ocean views and beach access.', 'House', 'For Sale', 0, 0.03, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=23456', '123 Ocean Retreat', 'County W', 'City W', 'Ocean Retreat', 33, -117, 900, 3, 2, 1, 1, 0, '2', 'Ocean View, Beach Access, Patio', '0', 0, '2023-09-01'),
(39, 'Ranch Style Home', 'A comfortable ranch-style home with a large backyard.', 'House', 'For Sale', 0, 0.02, 0, '', 'Vimeo', 'https://vimeo.com/34567', '456 Ranch Haven', 'County X', 'City X', 'Ranch Haven', 36, -97, 1600, 4, 3, 2, 2, 0, '1', 'Spacious Yard, Fireplace, Quiet Neighborhood', '0', 0, '2023-09-01'),
(40, 'Downtown Luxury Condo', 'An upscale condo in a prime downtown location.', 'Apartment', 'For Sale', 0, 0.04, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=56789', '789 Cityscape Plaza', 'County Y', 'City Y', 'Cityscape Plaza', 42, -88, 1800, 3, 2, 3, 2, 0, '10', 'City View, Gym, Concierge', '1', 0, '2023-09-01'),
(41, 'Lakefront Chalet', 'A charming chalet on the shores of a tranquil lake.', 'House', 'For Sale', 0, 0.03, 0, '', 'Vimeo', 'https://vimeo.com/67890', '101 Lake Serenity', 'County Z', 'City Z', 'Lake Serenity', 45, -76, 1200, 3, 2, 2, 1, 0, '2', 'Lake View, Deck, Fishing', '0', 0, '2023-09-01'),
(42, 'Suburban Family Home', 'A spacious family home in a quiet suburban neighborhood.', 'House', 'For Sale', 0, 0.02, 0, '', 'YouTube', 'https://www.youtube.com/watch?v=78901', '456 Suburban Haven', 'County AA', 'City AA', 'Suburban Haven', 39, -77, 2200, 5, 3, 3, 2, 0, '2', 'Backyard, Fireplace, Family-Friendly', '0', 0, '2023-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created`) VALUES
(1, 'Keke Ghenkai', 'sponge@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2023-09-03 11:05:49'),
(2, 'Kensmat', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2023-09-03 11:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
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
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
