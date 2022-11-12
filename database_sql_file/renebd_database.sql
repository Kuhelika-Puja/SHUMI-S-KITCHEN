-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table renebd.aboutuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `aboutuses` DISABLE KEYS */;
INSERT INTO `aboutuses` (`id`, `title`, `subtitle`, `description`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
	(1, 'Aboutus updated sdgdsfg', 'Updated rgdsfg', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil molestias exercitationem ab temporibus repellat voluptatem nulla! Nam autem impedit fugiat, iusto inventore doloremque explicabo vero optio, nemo totam, repellendus quam? afas efgdsfg update</p>', 'uploads/pagespic/24726525.png', 'uploads/pagespic/2698593.png', '2022-11-05 10:33:24', '2022-11-05 05:38:39');
/*!40000 ALTER TABLE `aboutuses` ENABLE KEYS */;

-- Dumping data for table renebd.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(2, 'admin', 'ad@gmail.com', '$2y$10$ootrABhLwDqqsuPGvuCtJusxlut/u.7I3JlxqLinq32Nff8jyWKZy', '2022-11-03 17:31:19', '2022-11-03 17:31:21');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping data for table renebd.app_model_news_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `app_model_news_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `app_model_news_images` ENABLE KEYS */;

-- Dumping data for table renebd.art: ~0 rows (approximately)
/*!40000 ALTER TABLE `art` DISABLE KEYS */;
/*!40000 ALTER TABLE `art` ENABLE KEYS */;

-- Dumping data for table renebd.art_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `art_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `art_categories` ENABLE KEYS */;

-- Dumping data for table renebd.banner_sections: ~0 rows (approximately)
/*!40000 ALTER TABLE `banner_sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `banner_sections` ENABLE KEYS */;

-- Dumping data for table renebd.blogs: ~2 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `image`, `position`, `status`, `created_at`, `updated_at`) VALUES
	(2, 2, 'sfgsdfg', 'dsfsdf', 'uploads/news/21667628410.jpg', 'fdghdfh', 0, '2022-11-05 06:06:50', '2022-11-05 06:09:13'),
	(3, 2, 'fsdfsdf', 'dsfsadfsdaf', 'uploads/news/21667628694.png', 'sadfsadfsadf', 0, '2022-11-05 06:10:42', '2022-11-05 06:11:34');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping data for table renebd.blog_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;

-- Dumping data for table renebd.blog_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `blog_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_images` ENABLE KEYS */;

-- Dumping data for table renebd.buy_nows: ~0 rows (approximately)
/*!40000 ALTER TABLE `buy_nows` DISABLE KEYS */;
/*!40000 ALTER TABLE `buy_nows` ENABLE KEYS */;

-- Dumping data for table renebd.communities: ~0 rows (approximately)
/*!40000 ALTER TABLE `communities` DISABLE KEYS */;
/*!40000 ALTER TABLE `communities` ENABLE KEYS */;

-- Dumping data for table renebd.contacts: ~1 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `tel`, `message`, `created_at`, `updated_at`, `subject`) VALUES
	(1, 'Irin Akter Ritu', 'irin16-402@diu.edu.bd', '01903714526112', 'sadfsdfsdf fgfd', '2022-11-06 05:12:10', '2022-11-06 05:14:47', 'hfgyhfghf');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping data for table renebd.courses: ~0 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping data for table renebd.csv_data: ~0 rows (approximately)
/*!40000 ALTER TABLE `csv_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `csv_data` ENABLE KEYS */;

-- Dumping data for table renebd.csv_import_data: ~0 rows (approximately)
/*!40000 ALTER TABLE `csv_import_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `csv_import_data` ENABLE KEYS */;

-- Dumping data for table renebd.currencies: ~0 rows (approximately)
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'taka', '2022-11-05 08:51:58', '2022-11-05 12:03:53');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;

-- Dumping data for table renebd.customers: ~0 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping data for table renebd.events: ~0 rows (approximately)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Dumping data for table renebd.galleries: ~0 rows (approximately)
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` (`id`, `category_id`, `title`, `position`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, '1', 'fasdf', 'asdfsad', 'fasdfsadf', 'uploads/website/gallery/1667637755.png', 1, '2022-11-05 08:42:35', '2022-11-05 08:42:35');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;

-- Dumping data for table renebd.gallery_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `gallery_categories` DISABLE KEYS */;
INSERT INTO `gallery_categories` (`id`, `category`, `description`, `image`, `position`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'fsdfsdf', 'sdfsdf hmjh', 'uploads/website/news/category/image 2.png', 'dfssdf ghfgvhgf', 1, '2022-11-05 08:21:40', '2022-11-05 08:45:41');
/*!40000 ALTER TABLE `gallery_categories` ENABLE KEYS */;

-- Dumping data for table renebd.histories: ~0 rows (approximately)
/*!40000 ALTER TABLE `histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `histories` ENABLE KEYS */;

-- Dumping data for table renebd.home_pages: ~0 rows (approximately)
/*!40000 ALTER TABLE `home_pages` DISABLE KEYS */;
INSERT INTO `home_pages` (`id`, `heading`, `content`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'sdfsdaf', 'sadfsadf', '1', NULL, NULL);
/*!40000 ALTER TABLE `home_pages` ENABLE KEYS */;

-- Dumping data for table renebd.home_page_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `home_page_images` DISABLE KEYS */;
INSERT INTO `home_page_images` (`id`, `name`, `image`, `position`, `link`, `created_at`, `updated_at`) VALUES
	(1, 'Ritu', 'uploads/homepageimage/21667621100.jpg', 2, 'dsdsf', '2022-11-05 04:02:16', '2022-11-05 04:05:00');
/*!40000 ALTER TABLE `home_page_images` ENABLE KEYS */;

-- Dumping data for table renebd.libraries: ~0 rows (approximately)
/*!40000 ALTER TABLE `libraries` DISABLE KEYS */;
/*!40000 ALTER TABLE `libraries` ENABLE KEYS */;

-- Dumping data for table renebd.library_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `library_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `library_categories` ENABLE KEYS */;

-- Dumping data for table renebd.migrations: ~50 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2020_04_04_125021_create_settings_table', 1),
	(2, '2020_04_04_135526_create_sliders_table', 1),
	(3, '2020_04_04_155903_create_services_table', 1),
	(4, '2020_04_04_161612_create_projects_table', 1),
	(5, '2020_04_04_162920_create_project_categories_table', 1),
	(6, '2020_04_05_054930_create_aboutuses_table', 1),
	(7, '2020_04_05_063447_create_partners_table', 1),
	(8, '2020_04_05_091252_create_courses_table', 1),
	(9, '2020_04_06_113358_create_product_categories_table', 1),
	(10, '2020_04_07_130440_create_products_table', 1),
	(11, '2020_04_29_061935_create_csv_data_table', 1),
	(12, '2020_04_29_081747_create_csv_import_data_table', 1),
	(13, '2020_06_13_035726_create_news_table', 1),
	(14, '2020_06_13_045859_create_blogs_table', 1),
	(15, '2020_06_14_064721_create_events_table', 1),
	(16, '2020_06_14_075131_create_stories_table', 1),
	(17, '2020_06_21_045252_create_teams_table', 1),
	(18, '2020_06_23_034553_create_contacts_table', 1),
	(19, '2020_07_06_100752_create_banner_sections_table', 1),
	(20, '2020_07_06_163654_create_section_twos_table', 1),
	(21, '2020_07_07_053234_create_model_sectionevents_table', 1),
	(22, '2020_07_07_054749_create_sectionevents_table', 1),
	(23, '2020_07_07_055835_create_section_shops_table', 1),
	(24, '2020_07_07_113003_create_section_voics_table', 1),
	(25, '2020_07_11_050007_create_galleries_table', 1),
	(26, '2020_07_11_054722_create_blog_categories_table', 1),
	(27, '2020_07_11_064509_create_communities_table', 1),
	(28, '2020_07_11_073449_create_art_table', 1),
	(29, '2020_07_11_075322_create_podcasts_table', 1),
	(30, '2020_07_11_075609_create_videos_table', 1),
	(31, '2020_07_11_084938_create_library_categories_table', 1),
	(32, '2020_07_11_105252_create_art_categories_table', 1),
	(33, '2020_07_12_104234_create_subscriptions_table', 1),
	(34, '2020_07_12_112629_create_missions_table', 1),
	(35, '2020_07_12_112712_create_histories_table', 1),
	(36, '2020_07_13_090547_create_libraries_table', 1),
	(37, '2020_07_16_112650_create_app_model_news_images_table', 1),
	(38, '2020_07_16_112853_create_blog_images_table', 1),
	(39, '2020_07_29_100635_create_news_images_table', 1),
	(40, '2020_10_07_052650_create_path_finders_table', 1),
	(41, '2020_10_07_081455_create_pathfinder_replies_table', 1),
	(42, '2020_11_19_041947_create_currencies_table', 1),
	(43, '2020_11_19_042026_create_service_charges_table', 1),
	(44, '2020_11_29_034857_create_customers_table', 1),
	(45, '2020_11_29_042015_create_order_proucts_table', 1),
	(46, '2020_11_29_052945_create_buy_nows_table', 1),
	(47, '2021_01_12_112812_create_home_pages_table', 1),
	(48, '2021_01_13_064502_create_home_page_images_table', 1),
	(49, '2022_11_03_101816_create_testimonials_table', 1),
	(50, '2022_11_03_105831_create_admins_table', 2),
	(51, '2022_11_03_113450_create_orders_table', 3),
	(52, '2022_11_05_080556_create_gallery_categories_table', 4),
	(53, '2022_11_05_083344_create_galleries_table', 5),
	(54, '2022_11_05_095128_create_users_table', 6),
	(55, '2022_11_05_100859_create_orders_table', 7),
	(56, '2022_11_06_043943_create_subscribes_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table renebd.missions: ~0 rows (approximately)
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;

-- Dumping data for table renebd.model_sectionevents: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_sectionevents` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_sectionevents` ENABLE KEYS */;

-- Dumping data for table renebd.news: ~0 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping data for table renebd.news_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;

-- Dumping data for table renebd.orders: ~2 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `email`, `location`, `city`, `product_id`, `address`, `postal_code`, `invoice_id`, `total_price`, `created_at`, `updated_at`) VALUES
	(5, '1', 'dsfsdf', '12313', 'ad@gmail.com', '1', '456456', NULL, '45645646545', '45645', 'renebd_63663c959a330', '1,100.00', '2022-11-05 10:36:05', '2022-11-05 10:36:05'),
	(6, '1', 'Ritu', '01903714526', 'ad@gmail.com', '1', '456456', NULL, '45645646545', '45645', 'renebd_636651d87ab42', '4,000.00', '2022-11-05 12:06:48', '2022-11-05 12:06:48');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping data for table renebd.order_proucts: ~8 rows (approximately)
/*!40000 ALTER TABLE `order_proucts` DISABLE KEYS */;
INSERT INTO `order_proucts` (`id`, `order_id`, `product_id`, `quentity`, `created_at`, `updated_at`) VALUES
	(3, 3, 1, 5, '2022-11-05 10:26:08', '2022-11-05 10:26:08'),
	(4, 3, 2, 2, '2022-11-05 10:26:08', '2022-11-05 10:26:08'),
	(5, 4, 1, 1, '2022-11-05 10:34:09', '2022-11-05 10:34:09'),
	(6, 4, 2, 2, '2022-11-05 10:34:09', '2022-11-05 10:34:09'),
	(7, 5, 1, 1, '2022-11-05 10:36:05', '2022-11-05 10:36:05'),
	(8, 5, 2, 1, '2022-11-05 10:36:05', '2022-11-05 10:36:05'),
	(9, 6, 1, 2, '2022-11-05 12:06:48', '2022-11-05 12:06:48'),
	(10, 6, 3, 2, '2022-11-05 12:06:48', '2022-11-05 12:06:48');
/*!40000 ALTER TABLE `order_proucts` ENABLE KEYS */;

-- Dumping data for table renebd.partners: ~0 rows (approximately)
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;

-- Dumping data for table renebd.pathfinder_replies: ~0 rows (approximately)
/*!40000 ALTER TABLE `pathfinder_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `pathfinder_replies` ENABLE KEYS */;

-- Dumping data for table renebd.path_finders: ~0 rows (approximately)
/*!40000 ALTER TABLE `path_finders` DISABLE KEYS */;
/*!40000 ALTER TABLE `path_finders` ENABLE KEYS */;

-- Dumping data for table renebd.podcasts: ~0 rows (approximately)
/*!40000 ALTER TABLE `podcasts` DISABLE KEYS */;
/*!40000 ALTER TABLE `podcasts` ENABLE KEYS */;

-- Dumping data for table renebd.products: ~2 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `image`, `description`, `currency`, `created_at`, `updated_at`) VALUES
	(1, '1', 'Irin Akter Ritu', '1000', 'uploads/product/21667640345.jpg', 'gtfsddsfg', 'Ritu', '2022-11-05 09:25:45', '2022-11-05 09:25:45'),
	(2, '1', 'Irin fdsf', '100', 'uploads/product/21667643645.png', 'dfsdfgdsg', 'Ritu', '2022-11-05 10:20:45', '2022-11-05 10:20:45'),
	(3, '1', 'arif', '1000', 'uploads/product/21667649883.png', 'fgydytfyyuku', 'taka', '2022-11-05 12:04:43', '2022-11-05 12:04:43');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping data for table renebd.product_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` (`id`, `category`, `parent_category`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'fsdfsdf', NULL, 'uploads/productCategory/21667638929.png', 1, '2022-11-05 09:02:09', '2022-11-05 09:02:09');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;

-- Dumping data for table renebd.projects: ~0 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping data for table renebd.project_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `project_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_categories` ENABLE KEYS */;

-- Dumping data for table renebd.sectionevents: ~0 rows (approximately)
/*!40000 ALTER TABLE `sectionevents` DISABLE KEYS */;
/*!40000 ALTER TABLE `sectionevents` ENABLE KEYS */;

-- Dumping data for table renebd.section_shops: ~0 rows (approximately)
/*!40000 ALTER TABLE `section_shops` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_shops` ENABLE KEYS */;

-- Dumping data for table renebd.section_twos: ~0 rows (approximately)
/*!40000 ALTER TABLE `section_twos` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_twos` ENABLE KEYS */;

-- Dumping data for table renebd.section_voics: ~0 rows (approximately)
/*!40000 ALTER TABLE `section_voics` DISABLE KEYS */;
/*!40000 ALTER TABLE `section_voics` ENABLE KEYS */;

-- Dumping data for table renebd.services: ~0 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping data for table renebd.service_charges: ~0 rows (approximately)
/*!40000 ALTER TABLE `service_charges` DISABLE KEYS */;
INSERT INTO `service_charges` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
	(1, 'service', '100', '2022-11-05 08:51:14', '2022-11-05 12:06:28');
/*!40000 ALTER TABLE `service_charges` ENABLE KEYS */;

-- Dumping data for table renebd.settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping data for table renebd.sliders: ~0 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping data for table renebd.stories: ~0 rows (approximately)
/*!40000 ALTER TABLE `stories` DISABLE KEYS */;
/*!40000 ALTER TABLE `stories` ENABLE KEYS */;

-- Dumping data for table renebd.subscribes: ~0 rows (approximately)
/*!40000 ALTER TABLE `subscribes` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribes` ENABLE KEYS */;

-- Dumping data for table renebd.subscriptions: ~0 rows (approximately)
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;

-- Dumping data for table renebd.teams: ~0 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping data for table renebd.testimonials: ~1 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `designation`, `image`, `name`, `comment`, `created_at`, `updated_at`) VALUES
	(2, 'dfssdfsdfg', 'uploads/testimonial/21667629539.jpg', 'dfsdafsdf', 'fdgdfsgdfgdsfg sdgdsfgds  gfhfdhfd', '2022-11-05 06:25:19', '2022-11-05 06:25:39');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping data for table renebd.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user_type`, `f_name`, `l_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, '', 'ariful', 'islam', 'arif@gmail.com', '$2y$10$mfX6IKgWF09mUIXI4oAG8eEmda6e1jXWQK8qO.hHjzII6f6e9ZXOy', '2022-11-05 10:01:09', '2022-11-05 10:01:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table renebd.videos: ~0 rows (approximately)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
