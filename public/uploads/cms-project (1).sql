-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 04:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banner 1', '<pre style=\"font-family: &quot;JetBrains Mono&quot;, monospace; font-size: 9.8pt;\"><h2 style=\"\"><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#000000\">We provide the best </font><b style=\"\"><font color=\"#ff9c00\">Industrial</font></b><font color=\"#000000\"> Services worldwide.</font></span></h2><h2 style=\"\"><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#000000\"><br></font></span></h2><h3 style=\"\"><font color=\"#000000\">An unknown printer took a gallery of type  and scrambled it to</font></h3><h3 style=\"\"><font color=\"#000000\">make a type specimen book.</font></h3></pre>', 'banner-pic-1.jpg', NULL, 1, '2022-01-18 01:24:31', '2022-01-23 22:12:32'),
(2, 'Banner 2', NULL, 'banner-pic-2.jpg', NULL, 1, '2022-01-23 21:04:58', '2022-01-23 21:04:58'),
(3, 'Banner 3', NULL, 'banner-pic-3.jpg', NULL, 1, '2022-01-23 21:05:16', '2022-01-23 21:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `content`, `image`, `blog_category_id`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arnold Engineering Development Complex build with us', 'arnold-engineering-development-complex-build-with-us', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-size: 1.06667rem; font-family: Hind, sans-serif;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-size: 1.06667rem; font-family: Hind, sans-serif;\">Which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum genera tors on the Internet tend to repeat predefined chunks as necessary, making this the first true genera tor on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence</p>', 'blog-pic-1.jpg', 1, 'business,article,blog', 1, '2022-01-11 02:23:48', '2022-01-24 12:26:13'),
(2, 'China\'s industrial profits grow faster in first eight months', 'chinas-industrial-profits-grow-faster-in-first-eight-months', '<h3 style=\"font-family: Montserrat, sans-serif; font-weight: bold; line-height: 1.1; color: rgb(5, 24, 41); margin-right: 0px; margin-bottom: 0.75em; margin-left: 0px; font-size: 1.66667rem;\">Santiago Bernabeu</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">Dut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums ut, totams se aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae duis autems vell eums iriure dolors in hendrerit saep.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">Eveniet in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut officiis.</p>', 'blog-pic-2.jpg', 4, NULL, 1, '2022-01-25 11:10:40', '2022-01-25 11:10:40'),
(3, 'Bus drivers in Liverpool vote for industrial action', 'bus-drivers-in-liverpool-vote-for-industrial-action', '<h3 style=\"font-family: Montserrat, sans-serif; font-weight: bold; line-height: 1.1; color: rgb(5, 24, 41); margin-right: 0px; margin-bottom: 0.75em; margin-left: 0px; font-size: 1.66667rem;\"><span style=\"color: rgb(106, 106, 106); font-family: Hind, sans-serif; font-size: 15px; font-weight: 400;\">Dut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums ut, totams se aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae duis autems vell eums iriure dolors in hendrerit saep.</span><br></h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">Eveniet in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut officiis.</p>', 'blog-pic-3.jpg', 3, NULL, 1, '2022-01-25 11:11:14', '2022-01-25 11:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Architect', 1, '2022-01-11 01:48:37', '2022-01-24 12:09:10'),
(2, 'Building', 1, '2022-01-24 12:09:24', '2022-01-24 12:10:21'),
(3, 'Travel', 1, '2022-01-24 12:09:33', '2022-01-24 12:09:33'),
(4, 'Renovation', 1, '2022-01-24 12:09:44', '2022-01-24 12:09:44'),
(5, 'Repair', 1, '2022-01-24 12:09:52', '2022-01-24 12:09:52'),
(6, 'Painting', 1, '2022-01-24 12:10:12', '2022-01-24 12:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'How does the website redesign process work?', 'Your project will start off with Kick-Off meeting. This is where you meet your Account Manager, Content Director, and Designer(s). At this meeting, you’ll talk through the scope of work, goals, and have an in-depth design discussion.\r\nAfter the Kick-Off meeting your Designer will begin work - either a logo, mood board or homepage. From there, we will work through the design of the site before gathering content.\r\nOur Content Director will guide you through the content gathering process based off of your designs. Next, we’ll conduct an SEO Audit and go through the results with your team.\r\nAfter 80% of your content is gathered and designs are approved, we’ll begin development.\r\nOnce your site is developed, we will train your team on how to update your new website! After you’ve been trained, we will set a launch window for your website.\r\nAfter launch, we’ll work with you to optimize your digital marketing strategy and grow your business.', '2022-01-23 10:58:08', '2022-01-24 09:17:41'),
(2, 'How much does a website cost?', 'Throughout your relationship with your Digital Strategist, they are constantly gathering information about your project to provide the most accurate estimate for your project. The cost depends on the amount of time used to design and custom develop your project. We offer business-specific products to help keep the cost as minimal as possible, but custom design and/or development work is billed accordingly. We’re happy to figure out the best plan to make your website work for you!', '2022-01-24 09:18:00', '2022-01-24 09:18:00'),
(3, 'How soon can my website launch?', 'Your launch date will depend on the complexity of your website. Our usual turnaround is between 3-6 months, depending on our client’s ability to provide feedback, content, and the overall complexity of the build. \r\n\r\nIf you have a specific launch date in mind, your Account Manager will be happy to work with you in setting up a timeline to achieve it.', '2022-01-24 09:18:21', '2022-01-24 09:18:21'),
(4, 'What is web hosting?', 'Web hosting is required in order to get your website online. It is the space that you ‘rent’ which houses your web files and allows users to access your site and the information contained on it.', '2022-01-24 09:18:52', '2022-01-24 09:18:52'),
(5, 'Can I purchase my own domain?', 'Go ahead. Once you’ve sorted your domain out, we can take things from there. But if you need help, feel free to ask.', '2022-01-24 09:19:13', '2022-01-24 09:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Gallery', 'gallery-pic-1.jpg', '2022-01-18 05:23:05', '2022-01-18 06:12:16'),
(2, 'Event Gallery', NULL, '2022-01-18 05:23:16', '2022-01-18 05:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `name`, `image`, `gallery_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'image-pic-1.jpg', 1, '2022-01-18 05:36:05', '2022-01-18 05:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Home', '#', 0, '2022-01-25 12:01:32', '2022-01-25 12:01:32'),
(2, 'About', 'about-us', 0, '2022-01-25 12:01:46', '2022-01-25 12:01:46'),
(3, 'Service', 'services', 0, '2022-01-25 12:02:03', '2022-01-25 12:02:03'),
(4, 'Projects', 'projects', 0, '2022-01-25 12:02:17', '2022-01-25 12:02:17'),
(6, 'Pages', 'pages', 0, '2022-01-25 12:02:43', '2022-01-25 12:02:43'),
(7, 'Blog', 'blogs', 0, '2022-01-26 01:24:46', '2022-01-26 01:24:46'),
(8, 'Contact', 'contact-us', 0, '2022-01-26 01:24:57', '2022-01-26 01:24:57'),
(9, 'Privacy', 'privacy', 6, '2022-01-26 02:25:27', '2022-01-26 02:25:27'),
(10, 'Terms & Conditions', 'terms-and-conditions', 6, '2022-01-26 02:26:00', '2022-01-26 02:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_10_092708_create_team_members_table', 2),
(6, '2022_01_10_114046_create_blog_categories_table', 3),
(7, '2022_01_10_114113_create_blogs_table', 3),
(8, '2022_01_11_081657_create_partners_table', 4),
(9, '2022_01_11_081825_create_social_links_table', 4),
(10, '2022_01_11_103549_create_testimonials_table', 5),
(11, '2022_01_12_063420_create_banners_table', 6),
(12, '2022_01_18_071541_create_services_table', 7),
(14, '2022_01_18_073147_create_settings_table', 8),
(15, '2022_01_18_103901_create_query_forms_table', 9),
(16, '2022_01_18_104810_create_galleries_table', 10),
(17, '2022_01_18_105002_create_gallery_images_table', 10),
(18, '2022_01_18_112730_create_pages_table', 11),
(20, '2022_01_23_163027_create_faqs_table', 12),
(21, '2022_01_24_170425_add_slug_to_services_table', 13),
(23, '2022_01_25_170239_create_menus_table', 14),
(24, '2022_01_26_071904_create_projects_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attach_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `description`, `date`, `quote`, `image`, `attach_file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'about-us', '<h2 style=\"font-family: Montserrat, sans-serif; font-weight: bold; line-height: 1.33em; color: rgb(5, 24, 41); margin: 0.13em 0px 0px; padding-bottom: 0.3em; position: relative;\"><span style=\"color: rgb(106, 106, 106); font-family: Hind, sans-serif; font-size: 15px; font-weight: 400;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</span><br></h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>', '2022-01-18', 'Get full range of premium Industrial services for your business', 'page-pic-1.jpg', NULL, 1, '2022-01-18 06:02:24', '2022-01-26 01:32:26'),
(2, 'Privacy', 'privacy', '<h2 style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 20px;\">Privacy Policy for&nbsp;<span class=\"highlight preview_company_name\" style=\"background: rgb(255, 255, 238);\">Company Name</span></h2><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">At&nbsp;<span class=\"highlight preview_website_name\" style=\"background: rgb(255, 255, 238);\">Website Name</span>, accessible at&nbsp;<span class=\"highlight preview_website_url\" style=\"background: rgb(255, 255, 238);\">Website.com</span>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by&nbsp;<span class=\"highlight preview_website_name\" style=\"background: rgb(255, 255, 238);\">Website Name</span>&nbsp;and how we use it.</p><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at&nbsp;<span class=\"highlight preview_email_address\" style=\"background: rgb(255, 255, 238);\">Email@Website.com</span></p><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">This privacy policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in&nbsp;<span class=\"highlight preview_website_name\" style=\"background: rgb(255, 255, 238);\">Website Name</span>. This policy is not applicable to any information collected offline or via channels other than this website.</p>', '2022-01-05', NULL, 'page-pic-2.jpg', NULL, 1, '2022-01-26 02:27:32', '2022-01-26 02:29:39'),
(3, 'Terms & Conditions', 'terms-and-conditions', '<h2 style=\"font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; line-height: 1.1; color: rgb(51, 51, 51); margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 20px;\">Terms and Conditions</h2><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Welcome to&nbsp;<span class=\"highlight preview_website_name\" style=\"background: rgb(255, 255, 238);\">Website Name</span>!</p><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">These terms and conditions outline the rules and regulations for the use of&nbsp;<span class=\"highlight preview_company_name\" style=\"background: rgb(255, 255, 238);\">Company Name</span>\'s Website, located at&nbsp;<span class=\"highlight preview_website_url\" style=\"background: rgb(255, 255, 238);\">Website.com</span>.</p><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">By accessing this website we assume you accept these terms and conditions. Do not continue to use&nbsp;<span class=\"highlight preview_website_name\" style=\"background: rgb(255, 255, 238);\">Website Name</span>&nbsp;if you do not agree to take all of the terms and conditions stated on this page.</p><p style=\"margin: 1em 0px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: “Client”, “You” and “Your” refers to you, the person log on this website and compliant to the Company\'s terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client\'s needs in respect of provision of the Company\'s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>', '2022-01-05', NULL, 'page-pic-3.jpg', NULL, 1, '2022-01-26 02:29:25', '2022-01-26 02:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'partner 1', NULL, 'partner-pic-1.png', '2022-01-11 02:54:03', '2022-01-23 20:59:26'),
(2, 'partner 2', NULL, 'partner-pic-2.png', '2022-01-23 20:58:44', '2022-01-23 20:58:44'),
(3, 'partner 3', NULL, 'partner-pic-3.png', '2022-01-23 20:58:58', '2022-01-23 20:58:58'),
(4, 'partner 4', NULL, 'partner-pic-4.png', '2022-01-23 20:59:15', '2022-01-23 20:59:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `slug`, `description`, `image`, `service_id`, `client`, `date`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Project 1', 'project-1', '<p><span style=\"color: rgb(106, 106, 106); font-family: Hind, sans-serif; font-size: 15px;\">Dut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums ut, totams se aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae duis autems vell eums iriure dolors in hendrerit saep.</span><br></p>', 'project-pic-1.jpg', 5, 'Nick', '2021-12-29', 'nick.com', 1, '2022-01-26 01:55:04', '2022-01-26 02:17:25'),
(2, 'Project 2', 'project-2', '<p><span style=\"color: rgb(106, 106, 106); font-family: Hind, sans-serif; font-size: 15px;\">Eveniet in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut officiis.</span><br></p>', 'project-pic-2.jpg', 5, 'Hari Kumar', '2022-01-13', 'hamronepal.com.np', 1, '2022-01-26 02:00:03', '2022-01-26 02:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `query_forms`
--

CREATE TABLE `query_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `query_forms`
--

INSERT INTO `query_forms` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ram', 'karki', 'ram@ram.com', '121212', 'testing message', '2022-01-26 00:57:56', '2022-01-26 00:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mechanical Works', 'mechanical-works', '<p style=\"margin-right: 0px; margin-bottom: 2em; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 2em 0px 3em; list-style-position: inside; list-style-type: none; color: rgb(51, 51, 51); font-family: Hind, sans-serif; font-size: 15px;\"><li style=\"position: relative; padding-left: 75px; font-weight: 600;\"><span class=\"fa fa-plus\" style=\"font-weight: normal; font-stretch: normal; line-height: 45px; font-family: FontAwesome; font-size: inherit; background-color: rgb(253, 201, 0); width: 45px; height: 45px; text-align: center; position: absolute; left: 0px; top: 10.7031px; transform: translateY(-50%);\"></span>Mollis Pharetra Euismod Tellus Fermentum</li><li style=\"position: relative; padding-left: 75px; font-weight: 600; margin-top: 45px;\"><span class=\"fa fa-plus\" style=\"font-weight: normal; font-stretch: normal; line-height: 45px; font-family: FontAwesome; font-size: inherit; background-color: rgb(253, 201, 0); width: 45px; height: 45px; text-align: center; position: absolute; left: 0px; top: 10.7031px; transform: translateY(-50%);\"></span>Vulputate sem Pellentesque Adipiscing</li><li style=\"position: relative; padding-left: 75px; font-weight: 600; margin-top: 45px;\"><span class=\"fa fa-plus\" style=\"font-weight: normal; font-stretch: normal; line-height: 45px; font-family: FontAwesome; font-size: inherit; background-color: rgb(253, 201, 0); width: 45px; height: 45px; text-align: center; position: absolute; left: 0px; top: 10.7031px; transform: translateY(-50%);\"></span>Cursus sit Tortor Ligula Nullam</li></ul><p style=\"margin-right: 0px; margin-bottom: 2em; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p><h4 style=\"font-family: Montserrat, sans-serif; font-weight: bold; line-height: 1.1; color: rgb(5, 24, 41); margin-right: 0px; margin-bottom: 0.4em; margin-left: 0px; font-size: 18px;\">Sem Aenean Pharetra</h4><p style=\"margin-right: 0px; margin-bottom: 2em; margin-left: 0px; color: rgb(106, 106, 106); line-height: 1.8em; font-family: Hind, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iste accusamus voluptates, aliquid blanditiis ut. Provident vitae ullam quibusdam quae libero dolores, ratione vel cupiditate sunt amet? Sit, incidunt, laboriosam!</p>', 'service-pic-1.jpg', 1, '2022-01-18 01:41:47', '2022-01-25 10:45:50'),
(2, 'Power  & Energy', 'power-energy', NULL, 'service-pic-2.jpg', 1, '2022-01-23 20:56:40', '2022-01-24 11:20:39'),
(3, 'Petroleum Refines', 'petroleum-refines', NULL, 'service-pic-3.jpg', 1, '2022-01-23 20:57:25', '2022-01-24 11:20:58'),
(4, 'Material Engineering', 'material-engineering', NULL, 'service-pic-4.jpg', 1, '2022-01-24 11:21:59', '2022-01-24 11:21:59'),
(5, 'Alternative Energy', 'alternative-energy', NULL, 'service-pic-5.jpg', 1, '2022-01-24 11:22:23', '2022-01-24 11:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_status` tinyint(4) NOT NULL,
  `close_msg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_fav` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_preload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_desc`, `site_keywords`, `site_url`, `site_status`, `close_msg`, `fb_link`, `youtube_link`, `twitter_link`, `linkedin_link`, `google_link`, `contact_email`, `contact_address`, `contact_landline`, `contact_mobile`, `contact_hours`, `style_logo`, `style_fav`, `style_preload`, `created_at`, `updated_at`) VALUES
(1, 'Content Management System', 'Website description and some little information about it', 'cms,key,words, website, web', 'http://site.com.np', 1, 'Website under maintenance Comming SOON', NULL, NULL, NULL, NULL, NULL, 'info@site.com', 'Kathmandu , Nepal', '01451243', '9845454545', 'Sunday to Friday From 10 am - 5 pm', 'logo-1.png', NULL, 'preload-1.gif', '2022-01-18 02:46:16', '2022-01-25 10:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-hire-a-helper', '#', '2022-01-11 04:45:35', '2022-01-11 04:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `title`, `photo`, `designation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Evan', 'team-pic-1.jpg', 'CEO', 'tetete', 1, '2022-01-10 05:43:11', '2022-01-26 01:10:18'),
(2, 'Michal Jackson', 'team-pic-2.jpg', 'Manager', NULL, 1, '2022-01-26 01:10:49', '2022-01-26 01:10:49'),
(3, 'Jenny Talyor', 'team-pic-3.jpg', 'Marketing Supervisor', NULL, 1, '2022-01-26 01:11:30', '2022-01-26 01:11:30'),
(4, 'Tom Jerry', 'team-pic-4.jpg', 'Director of the board', NULL, 1, '2022-01-26 01:12:40', '2022-01-26 01:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `status`, `description`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Ram', 'testimonial-pic-1.jpg', '1', '<b style=\"margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: &quot;trebuchet ms&quot;, arial, sans-serif; font-size: 12.8px;\"><i style=\"margin: 0px; padding: 0px;\">If you want real marketing that works and effective implementation - factory\'s got you covered. Thanks guys, keep up the good work! Factory is awesome! I wish I would have thought of it first.</i></b>', 'Student', '2022-01-11 05:02:39', '2022-01-23 21:02:23'),
(2, 'Sita Sharma', 'testimonial-pic-2.jpg', '1', '<p><b style=\"margin: 0px; padding: 0px; color: rgb(119, 119, 119); font-family: &quot;trebuchet ms&quot;, arial, sans-serif; font-size: 12.8px;\"><i style=\"margin: 0px; padding: 0px;\">The very best. Since I invested in industrial I made over 100,000 dollars profits. We\'ve used industrial for the last five years. Not able to tell you how happy I am with industrial.</i></b><br></p>', 'Client', '2022-01-23 21:01:17', '2022-01-23 21:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$sniHYjqr6hgafrN2/4WYc.B17ilWbDFoXc4LZevWWUMoolMJCrkJi', NULL, '2022-01-10 03:18:02', '2022-01-10 03:18:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_images_gallery_id_foreign` (`gallery_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_service_id_foreign` (`service_id`);

--
-- Indexes for table `query_forms`
--
ALTER TABLE `query_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `query_forms`
--
ALTER TABLE `query_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
