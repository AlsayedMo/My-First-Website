SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `wachtwoord` varchar(120) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `users` (`id`, `name`, `email`, `wachtwoord`, `message`) VALUES
(9, 'sd', 'ahmet@mail.com', 'NkSwK25gBKCiNpd', 'ssss'),
(10, 'jj', 'mohammed@gmail.com', 'NkSwK25gBKCiNpd', 'fafew'),
(11, 'jj', 'mohammed@gmail.com', 'NkSwK25gBKCiNpd', 'fafew'),
(12, 'aa', 'ss@gmail.com', 'NkSwK25gBKCiNpd', 'aaa'),
(13, 'aa', 'ss@gmail.com', 'NkSwK25gBKCiNpd', 'aaa'),
(14, 'aa', 'ss@gmail.com', 'NkSwK25gBKCiNpd', 'aaa'),
(15, 'aa', 'ss@gmail.com', 'NkSwK25gBKCiNpd', 'aaa'),
(16, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(17, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(18, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(19, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(20, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(21, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(22, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(23, 'ss', 'ssss@gamil.nl', 'NkSwK25gBKCiNpd', 'sssss'),
(24, 'Mohamed Alsayed', 'Alsayedafatima98@gmail.com', 'awdawdadw', 'awdadwawd'),
(25, 'Mohamed Alsayed', 'Alsayedafatima98@gmail.com', 'awdawdadw', 'awdadwawd'),
(26, 'mo', 'heddy@gmail.com', 'Dawdawd', 'awdawdawd'),
(27, 'mo', 'heddy@gmail.com', 'Dawdawd', 'awdawdawd');
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;
