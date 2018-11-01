--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(150) NOT NULL,
  `guest_address` text NOT NULL,
  `guest_phone` varchar(150) NOT NULL,
  `guest_email` varchar(150) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `guest`
--
ALTER TABLE `guest` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;