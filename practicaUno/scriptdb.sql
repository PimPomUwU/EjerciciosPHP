CREATE TABLE IF NOT EXISTS `practicauno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_message` enum('read','unread','send','received') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'unread',
  `content` text COLLATE utf8_spanish_ci NOT NULL,
  `sender_user_id` int(11) NOT NULL CHECK (`sender_user_id` != 0),
  `recipient_user_id` int(11) NOT NULL CHECK (`recipient_user_id` != 0 AND `recipient_user_id` != `sender_user_id`),
  `date_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
