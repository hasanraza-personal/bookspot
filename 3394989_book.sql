-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time: Oct 18, 2021 at 03:53 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3394989_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `srno` int(11) NOT NULL,
  `username` text,
  `bookname` text,
  `photo` text,
  `category` text,
  `authorname` text,
  `totalstar` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`srno`, `username`, `bookname`, `photo`, `category`, `authorname`, `totalstar`, `total`) VALUES
(15, 'nishi', 'YOU LET ME IN', 'upload/f4b48e648ce085b145038110b2ab4c62.books1.jpg', 'Horror', ' Camilla Bruce', 4, 1),
(16, 'chitra', 'INCENDIARY ', 'upload/b2d89e1c7877617154733fbc1f1b7fbe.book2.jpg', 'Sci-Fiction', 'Zoraida CÃ³rdova', 5, 1),
(17, 'preety', 'THE LIGHT IN HIDDEN PLACES ', 'upload/6e624b576e4ba0633146e8aeca9a9150.book3.jpg', 'History', ' Sharon Cameron', 4, 1),
(18, 'raj', 'THE RUDEST BOOK EVER', 'upload/2bb0bdd820302cc8db5038be41a5dd7b.book4.jpg', 'Motivation', 'shwetabh gangwar', 20, 5),
(21, 'gopal', 'WINGS OF FIRE', 'upload/48802129c8509aa411c40f5fd8104c97.kalam-500x500.jpeg', 'Biography', 'A.P.J. Abdul Kalam', 5, 1),
(22, 'radhika', 'THE HOUND OF THE BASKERVILLES ', 'upload/d5d199732cd988a9ccd8ac0e53f0e445.book5.jpg', 'Mysteries', ' Arthur Conan Doyle ', 5, 1),
(23, 'aditya', 'WOLVERINE', 'upload/b131973cd23f160623c8749fd43419f4.book6.jpg', 'comics', 'Renato Guedes ', 10, 2),
(25, 'Rafiya', 'THE GIRL IN ROOM 105', 'upload/c98947f70bd5dc722ee63c207c020bfd.IMG-20200501-WA0031.jpg', 'Mysteries', 'Chetan Bhagat', 19, 4),
(26, 'Neelam Kushvaha', 'RICH DAD POOR DAD', 'upload/081f1fbe93b0586ef0fadcd9cbef6c9a.images (57)-1.jpg', 'other', 'Robert Kiyosaki', 9, 2),
(29, 'Ziauddin', 'MORNING WALK', NULL, 'other', 'William miles', 5, 1),
(31, 'Alina', 'THE GIRL WHO KNEW TOO MUCH', 'upload/5efb42941c2ead7f4ae0f98e13215e77.20200502_055445.jpg', 'other', 'Vikrant Khanna', 3, 1),
(32, 'Rahim', 'ZERO TO ONE', 'upload/ab55538e75860e055345814f46ec15ed.20200502_061144.jpg', 'Business', 'Peter Thiel', 4, 1),
(36, 'Manjusha ', 'PAPPILON ', 'upload/e218c1c46947d974df8a1f3ad4de945b.3FD90543-1BAC-4A86-B058-28BA43DB9D69.png', 'Biography', 'Henry charirere', 5, 1),
(38, 'Abhishek nair', 'THE SECRET', 'upload/3c572d89de58ecf22493126b942b315f.IMG_20190615_142749_085.jpg', 'Motivation', 'Rhonda Byrne', 10, 2),
(39, 'Abhishek nair', 'YOU CAN WIN', 'upload/86188a83c246d3a894648b2f8a4be485.IMG_20200502_185014.jpg', 'Motivation', 'Shiv khera', 4, 1),
(40, 'Simran', 'HARRY POTTER AND THE PHILOSOPHERâ€™S STONE', 'upload/999c4545ca7bfddf33f8e0b5970cb1c5.30046A0A-4604-4C16-A76A-5ED474EAFE62.jpeg', 'Mysteries', 'J.K. Rowling', 4, 1),
(41, 'Nikita', 'DONGRI TO DUBAI', 'upload/d62d35ab0cf17bf0c6a267b0be4606b1.1374E503-AF11-472E-A21F-674512660CA3.jpeg', 'other', 'Hussain Zaidi', 3, 1),
(42, 'Sameer ', 'AN ERA OF DARKNESS: THE BRITISH EMPIRE IN INDIA', 'upload/17eab236d02750bfa4065b649d646c87.39428B5C-9751-4A8F-ACEA-261EA86D4ECB.jpeg', 'History', 'Shashi Tharoor', 10, 2),
(43, 'Deep', 'ASURA: TALE OF THE VANQUISHED', NULL, 'History', 'Anand Neelakantan', 2, 1),
(44, 'Ritu', 'TWILIGHT ', 'upload/ea07421a7a65b568506e73e3bf3a4935.download (27).jpeg', 'other', 'Stephenie Meyer ', 6, 3),
(45, 'het', 'THE 3 MISTAKES OF MY LIFE', 'upload/329f99d581cba83f19e1c611c35cb78e.unnamed.jpg', 'other', 'chetan bhagat', 11, 3),
(46, 'John Merchant', 'GONE GIRL', 'upload/c5a54a82517bce7b0212b83700273ee6.20200504_054631.jpg', 'Mysteries', 'Gillian Flynn', 4, 1),
(47, 'Piyush Parashar', 'THE GIRL ON THE TRAIN', 'upload/db614392e26237887ea126301e79a824.20200504_055245.jpg', 'Mysteries', 'Paula Hawkins', 5, 2),
(48, 'Adhiraj Tambe', 'I AM MALALA ', 'upload/a22577374c9806ec7e727407132accd9.20200504_061628.jpg', 'other', 'Malala Yousafzai', 5, 1),
(59, 'Chintan Gupta', 'NAKED', 'upload/37a64f23283313a92a0ed28e977b3307.images (60).jpeg', 'other', 'David Sedaris ', 5, 1),
(60, 'Smriti Khanna', 'SOMETHING I NEVER TOLD YOU', 'upload/ecc5bbec5d20c43b2f29ac418b347e7e.images (61).jpeg', 'other', 'Shravya Bhinder', 5, 2),
(61, 'Zayan Pathan', 'THINK AND GROW RICH', 'upload/79b5b0b16b1515f745ab87c21dc14bf2.download (30).jpeg', 'Business', 'Napoleon Hill ', 3, 1),
(62, 'Sachin Singh', 'LAY MISERABLES', 'upload/4bdc575f285e0c8ce5bddfcb477fb285.20200507_231445.jpg', 'History', 'Victor Hugo', 5, 1),
(63, 'Rahul Jaiswal', 'ASTRO BOY', 'upload/870572cb333b691d7cefe87357cc3542.135074._UY475_SS475_.jpg', 'comics', 'Osama Tezuka', 2, 1),
(64, 'Arun Borana', 'TO KILL A MOCKINGBIRD', 'upload/53f781e6330c186934713ac09b01408f.images (70).jpeg', 'other', 'Harper Lee', 2, 1),
(65, 'Aditya Mohite', 'THE ALCHEMIST', 'upload/07eb9e5f0f077a59a183ce4e8663a997.15892661497252416125818575223062.jpg', 'Motivation', 'Paulo Coelho', 9, 2),
(66, 'John Dsouza', 'THE WONDERFUL WIZARD OF OZ', 'upload/4c22bfb27b377395cae44da991d45f72.images (81).jpeg', 'other', 'L.Frank Baum', 3, 1),
(67, 'Jack Hardward', '1984', 'upload/e6de3324bb1e6bd84b6011ade95cc220.download (31).jpeg', 'Sci-Fiction', 'George Orwell', 5, 1),
(68, 'Avnish Yadav', 'WHO WILL CRY WHEN YOU DIE', 'upload/ae9674669061cb3f7974d748992cd562.20200521_072215.jpg', 'other', 'Robin Sharma', 5, 1),
(69, 'Pratik Singh', 'YOU CAN SELL', NULL, 'other', NULL, 5, 1),
(70, 'Anand Kumar', 'SAPIENS', 'upload/f1ffbb821b08eda680d89603865041a7.images (21).jpeg', 'other', 'Yuval Noah Harari', 2, 1),
(73, 'S.k Nizamuddin ', 'BHOOT BANGLOW', NULL, 'Horror', 'Thomas henriques', 5, 1),
(74, 'Rafiya Khan', 'HOW TO WIN FRIENDS &AMP; INFLUENCE PEOPLE', 'upload/a0364fb282f54a06a4a87fbdbdf21961.inbound4610630542322619580.jpg', 'Motivation', 'Dale Carnegie', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `srno` int(11) NOT NULL,
  `type` text,
  `suggestion` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`srno`, `type`, `suggestion`) VALUES
(1, 'suggestion', 'There should be a delete option for deleting the cover page of the book...'),
(2, 'issue', 'My posted book isnit coming'),
(3, 'suggestion', 'Logo badal re lavdu.abhishek bool raha hu'),
(4, NULL, 'Good'),
(5, 'suggestion', 'I must say,you are doing great work..\r\nKeep it up !!\r\nThis website helped me.\r\nThank you...\r\n'),
(6, 'issue', ''),
(7, 'issue', 'Tatty website');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `srno` int(11) NOT NULL,
  `username` text,
  `bookname` text,
  `category` text,
  `rating` text,
  `review` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`srno`, `username`, `bookname`, `category`, `rating`, `review`) VALUES
(17, 'nishi', 'YOU LET ME IN', 'Horror', '4', 'What a crazy and weird novel! I don\'t really know what to make of this, but I enjoyed every minute of this book. This book is about evil fairies and family drama. I dare you to try reading YOU LET ME IN; I hope you get sucked in as I did! Happy reading!'),
(18, 'chitra', 'INCENDIARY ', 'Sci-Fiction', '5', 'A book filled with intrigue, secrets, spies and complicated relationships. With a memory thief at the center you know it\'s going to be a lot of secrets and twists and turns! Add in Zoraida Cordova\'s beautiful writing and ability to give us a gorgeous slow burn romance, and this will be one of your favorite new YA fantasies for sure!'),
(19, 'preety', 'THE LIGHT IN HIDDEN PLACES ', 'History', '4', 'I really enjoyed The Light in Hidden Places, which is the true life story of two Polish sisters who hid thirteen jews during the war. It highlights the courage and resilience of ordinary people during this horrific time. I would definitely recommend this book to historical literature fans.'),
(20, 'raj', 'THE RUDEST BOOK EVER', 'Motivation', '5', 'This is the first book Iâ€™ve ever read. Not into reading and stuff. As soon as I saw itâ€™s written by Shwetabh Gangwar, I purchased without giving it a second thought. The chapters. Introduction. Metaphors. Everything is amazing about this book.\r\nGo for it if you want self improvement and self realisation.'),
(21, 'deep', 'THE RUDEST BOOK EVER', 'Motivation', '1', 'Must read ! Very straight forward and extremely practical. Author has great insights to share which are very helpful in day to day lives. Concepts are crystal clear and well explained. Looking forward to more books and content to come. Thank You Shwetabh for your impeccable work.\r\n'),
(22, 'Rajesh', 'THE RUDEST BOOK EVER', 'Motivation', '5', 'Its a fast paced book because author tried to explain deep topics of life in short, so read each and every line with full concentration so that you can keep up with the flow. Loved the book .'),
(23, 'jinesh', 'THE RUDEST BOOK EVER', 'Motivation', '5', 'Amazing book. It enhances your perspective of life situations. Worth the read.'),
(26, 'gopal', 'WINGS OF FIRE', 'Biography', '5', 'Very much motivational book in terms of achievements carried by a normal individual. This book itself says â€œjust do itâ€.'),
(27, 'radhika', 'THE HOUND OF THE BASKERVILLES ', 'Mysteries', '5', 'If you are a fan of thrillers and mystery, and you haven\'t read Sherlock Holmes,then what are you doing?\r\nI don\'t find myself eligible to comment anything about an author of his level..Just pick it up and read okay.. You\'ll love it!!\r\n'),
(28, 'aditya', 'WOLVERINE', 'comics', '5', 'This is a good story and was easy to follow with out reading Wolverine goes to hell. This story makes you want to see what happens next when Wolverine goes back to the X-Men.'),
(29, 'izaan', 'WOLVERINE', 'comics', '5', 'Good writing and story line. Kept my attention throughout. Well done. I will definitely read more comics by this writer'),
(33, 'Rafiya', 'THE GIRL IN ROOM 105', 'Mysteries', '5', 'Okay to begin with the first question which arises is why would one buy this book ??\r\nBut the answer is really simple...\r\nChelan Bhagat,the writer of this book,the simple language in which he writes is a great advantage for first time readers,the book cover along with its tiltle &amp; many more such things.What makes the book differentiate it from others is that it\'s not a love story. It\'s an UNLOVE STORY...This story doesn\'t has a love angle implant in it,but it basically focuses on a thriller genre which kept me hooked till the very end &amp; I\'m sure it will happen to you too.What\'s the mystery is worth waiting as it unfolds step by step,a great round of applause for him.\r\nAnd my favorite words of this book is\r\n&quot;Sometimes our hearts lead us to wrong places&quot; this line hit me hard...\r\nSo what are you waiting for ??I\'m not gonna tell you the whole story...Just pick up the book with the beverage you like &amp; commence reading.I assure you its worth reading...ðŸ˜Š'),
(34, 'Neelam Kushvaha', 'RICH DAD POOR DAD', 'other', '5', 'Rich dad poor dad is a book written by Robert Kiyosaki. This is an amazing novel which teaches us about the thinking of two different people. Here the poor dad is the writer\'s dad and the rich dad is his best friend\'s dad. The novel is witten in very simple language. According to the rich dad, fear is the primary emotion when the subject of money is discussed. If you don\'t want to become slave of money,so you have to think logically and not through emotions. It also gives us the knowledge about financial intelligence,economy. '),
(37, 'Ziauddin', 'MORNING WALK', 'other', '5', 'A book which has to be readed twice.'),
(39, 'Alina', 'THE GIRL WHO KNEW TOO MUCH', 'other', '3', 'The book is interesting but gets boring at some point.It is a fantasy.Also the writer do not unfold the mystery properly.End part could have been made more interesting but I recommend,once u should read this book...'),
(40, 'Rahim', 'ZERO TO ONE', 'Business', '4', 'It\'s a very good book for the ones who are starting their business...helps to understand how to handle ups and downs in the business...'),
(41, 'Pranav', 'THE GIRL IN ROOM 105', 'Mysteries', '5', 'The book is Amazing.Never thought the truth would be this after step by step the mystery revealed.And like Rafiya even my favourite words of the book are &quot;Sometimes our heart leads us in wrong places&quot;.Wonderful plot.One must read.'),
(45, 'Manjusha ', 'PAPPILON ', 'Biography', '5', 'Worth reading,'),
(47, 'Amaan', 'RICH DAD POOR DAD', 'other', '4', 'Great book!!Teach us some great lessons,read it once...'),
(48, 'Harsh', 'THE RUDEST BOOK EVER', 'Motivation', '4', 'Well,this book helped me a lot,to come out of the emotions through I was going on.So if u wanna feel motivated go through the book.'),
(49, 'Abhishek nair', 'THE SECRET', 'Motivation', '5', 'If you like to think about life and your own thoughts then this is the best book for you.\r\nIt will drive you to the next level of thinking and there is a secret inside it.'),
(50, 'Abhishek nair', 'YOU CAN WIN', 'Motivation', '4', 'It will motivate you in such a way that you will know how to achieve success.'),
(51, 'Simran', 'HARRY POTTER AND THE PHILOSOPHERâ€™S STONE', 'Mysteries', '4', 'Iâ€™m willing to bet youâ€™ve heard of Harry Potter, but have you read the books? Join Harry Potter as he begins his journey into the world of magic, where he is the celebrated Boy Who Lived. Visit Hogwarts, meet your favourite characters and watch Harry grow into the one of the most famous literary characters in the world.'),
(52, 'Nikita', 'DONGRI TO DUBAI', 'other', '3', 'The book gives good insight into the mafia in Mumbai, especially Dawood Ibrahim. The book reads a little disjointed at places. If it is fast paced thrilling action you want, this is not the book for you. It is more a compilation of facts, but presented in a well readable manner. In short a book that can be called- All you wanted to know about the mafia dons of Mumbai but were afraid to ask.'),
(53, 'Sameer ', 'AN ERA OF DARKNESS: THE BRITISH EMPIRE IN INDIA', 'History', '5', 'This is a book that should be a compulsory text book for all history lessons in schools here so that children will know and understand the dark deeds as well that were perpetrated on the countries of the Commonwealth and not only the glorious victories of GREAT BRITAIN\'s EMPIRE and of Britannia ruling the waves!\r\n'),
(54, 'Vivek', 'AN ERA OF DARKNESS: THE BRITISH EMPIRE IN INDIA', 'History', '5', 'Sashi Tharoor has brilliantly elucidated the loot and the deceit indulged in by the British. He has successfully carried the conviction with the readers with irrefutable facts and impeccable presentation. Overall, the book is simply brilliant and is a must read.'),
(55, 'Deep', 'ASURA: TALE OF THE VANQUISHED', 'History', '2', 'I\'ll be honest, it\'s a good to average read but there are chapters which only describes the thoughts of ravaan and bhadra\'s pain and fame and what not. Those were very repeatating and very boring! Almost in every chapter you\'ll find those long and unnecessary narrations by Raavan and Bhadra. I think that stretched the story without any reason. I loved the chapter when Ravaan came face to face with Rama in the battlefield. That was my favourite chapter. And the ending was also nice. And of course as i mentioned those boring chapters made the book thick, beyond my liking!'),
(56, 'Ritu', 'TWILIGHT ', 'other', '1', 'The worst book I ever read.Got too bored.Also at some points the plot becomes seductive,the book not worked for me.If u r a vampire lover then it may work for u.'),
(57, 'Rakesh', 'TWILIGHT ', 'other', '1', 'Very boring !!'),
(58, 'Samrath', 'TWILIGHT ', 'other', '4', 'The story line was good.the romance in this book is Awesome..'),
(59, 'Zainab', 'THE GIRL IN ROOM 105', 'Mysteries', '4', 'The book was too good.The one who loves mystery,so u got it,the book is for u.Being a girl,I am not satisfied with the Zara\'s character.Keshav loves Zara a lot,and he go to every extent he can go for her,to find the..wait,u want to know,find urself by reading the book..U will not be disappointed.âœŒ'),
(60, 'het', 'THE 3 MISTAKES OF MY LIFE', 'other', '3', 'First book i read from chetan bhagat He is speaking about indians to indians\r\nBut whatever it made me it just made me sleepy a little bit in middle but managed to complete with two sittings because it eagers me read thats the only thing author made good in this book. It just seems to feel like seeing a cinema of average range but the cinema doesn\'t got sensored.\r\n'),
(61, 'John Merchant', 'GONE GIRL', 'Mysteries', '4', 'So twisted and thrilling, I mean after reading the first five pages I was like am I seriously reading this boring book but as the pages increase so dose my great interest in wanting to find out more. I love this book.\r\n\r\n'),
(62, 'Piyush Parashar', 'THE GIRL ON THE TRAIN', 'Mysteries', '1', 'Please do not read this book. The story is very much predictable and the author has just been beating around the bush.\r\n'),
(63, 'Rishi Roy', 'THE 3 MISTAKES OF MY LIFE', 'other', '3', 'The book is about three friends &amp; their different characters,a good book to read by Chetan Bhagat.'),
(64, 'Adhiraj Tambe', 'I AM MALALA ', 'other', '5', 'It is an inspiring story of a young pakistani girl who fought for the right of education.She wasn\'t afraid to stand up and then tell her story. I\'m truly inspired by her action and her words.A must read book.'),
(65, 'Arzoo Shaikh', 'THE GIRL ON THE TRAIN', 'Mysteries', '4', 'This book was fantastic! I found it hard to put down.Couldn\'t put down the book until I got to the end. Such a great thriller. Super recommended. '),
(66, 'Ayush', 'THE SECRET', 'Motivation', '5', 'Must read. The journey is more beautiful than the destination...'),
(81, 'Chintan Gupta', 'NAKED', 'other', '5', 'The book was so funny.I laughed a lot and cried due to laughing.Awesome book.It is a book by David Sedaris life\'s kinda essay.'),
(82, 'Smriti Khanna', 'SOMETHING I NEVER TOLD YOU', 'other', '4', '&quot;When in love, you tend to take each other for granted, and sometimes, that can cost you a lifetime of togetherness&quot;,this is what the book was all about.Satisfied with the story.Best book for the ones who love to read romance genre.'),
(83, 'Zayan Pathan', 'THINK AND GROW RICH', 'Business', '3', 'The book was good.\r\n&quot;Patience,persistent and perspiration make an unbeatable combination for success&quot;is what Napoleon Hill says.It promotes personal development and self-improvement.'),
(84, 'Sachin Singh', 'LAY MISERABLES', 'History', '5', 'Firstly never thought that a history fiction book could make you cry from core of the heart.In the book,Jean Valjean\'s story made me cry and I never cry. So touching, So beautiful. Would read again.For me,it was a great book ever.'),
(85, 'Rohit Sardar', 'SOMETHING I NEVER TOLD YOU', 'other', '1', 'I just not even completed the half of the book..very boring..'),
(86, 'Rahul Jaiswal', 'ASTRO BOY', 'comics', '2', 'The comic was okay.Better for kids.'),
(87, 'Arun Borana', 'TO KILL A MOCKINGBIRD', 'other', '2', 'The Book was too boring.i thought the plot will give me what I was expecting but it did not.Just giving two stars bcuz 9f the character so called Boo.'),
(88, 'Alina Khan', 'THE GIRL IN ROOM 105', 'Mysteries', '5', 'Well I could feel the story through my soul.Chetan Bhagat Sir,writing has magic,where at sometimes it gave me goosebumps.If anyone come to me and ask what do u think,which book I should read ?? I\'ll Say Chetan Bhagat Sir,novels are the best..And specially &quot;THE GIRL IN ROOM 105&quot;...'),
(89, 'Aditya Mohite', 'THE ALCHEMIST', 'Motivation', '4', 'Not Much found of Reading books. So lately I found this book in my storey so I thought lets give it a try and consequently my first became my best. Gives Wandering and adventurous trip of Life!'),
(90, 'Ajay Khurana', 'THE 3 MISTAKES OF MY LIFE', 'other', '5', 'The book was Awesome,much satisfied with the plot.Chetan Bhagat books are the best ones..And i could relate those three friend stories with my bros..Cheers to our friendship &amp; cheers to this book.'),
(91, 'John Dsouza', 'THE WONDERFUL WIZARD OF OZ', 'other', '3', 'This book was the first one I like the adventure done by Dorothy..loved this book..a book which is good to read for children at bed time.if u dont want to read this book at least  read it for u child,I\'m sure he will love it.ðŸ˜œðŸ˜‰'),
(92, 'Jack Hardward', '1984', 'Sci-Fiction', '5', 'This book left me with a lot of questions, but not the sorts of questions which I will regret never having answers to. I felt that Orwell did a splendid job of tying up the novel and closing in on his political commentary which aligned with popular beliefs from his time...'),
(93, 'Avnish Yadav', 'WHO WILL CRY WHEN YOU DIE', 'other', '5', 'If you had not read any Personality Development book then this is a gem for you.It teach us about the values,morals of life.A Good book to read by Robin Sharma.'),
(94, 'Mahindra Makwana', 'THE ALCHEMIST', 'Motivation', '5', 'This is a story of a shepherd boy who want to pursue his dreams..Well a masterpiece the book is!! A book that should be in every bookshelf..Favourite line:&quot;You can become blind by seeing each day as a similar one. Each day is a different one, each day brings a miracle of its own. Itâ€™s just a matter of paying attention to this miracle&quot;-Paulo Chaleo,The Alchemist'),
(95, 'Pratik Singh', 'YOU CAN SELL', 'other', '5', 'It\'s a different book!A self-help book;which teaches us that often we are told to learn the tactics rather than principles of the trade.If one understands the principles,the success is on the way.So a must read book.'),
(96, 'Anand Kumar', 'SAPIENS', 'other', '2', 'The book is literally boring.It is only good for the ones who loves and want to know about the history of mankind.I read only 72 out of 350 pages and started feeling bored but though I completed the book as it was better than sitting idol at home in this lockdown.But I will recommend this book to only History lovers.'),
(99, 'S.k Nizamuddin ', 'BHOOT BANGLOW', 'Horror', '5', 'The book was very amazing. It\'s like a comedy horror. Extremely satisfied. '),
(100, 'Rafiya Khan', 'HOW TO WIN FRIENDS &AMP; INFLUENCE PEOPLE', 'Motivation', '5', 'When i begin reading,the very initaial pages begin to tell me that &quot;I\'m gonna get bored&quot; but as I continued I was so engrossed in it that I didn\'t realized,I came to the very end of the book soon.Well coming to the book;the Writer has expressed the values so clearly,that if one applies the same in their life,the people can really get influenced.My favourite words from the book were,&quot;Before u speak,pause &amp; ask yourself:\'How can I make this person want to do it?\'That question will stop us from rushing into a situation heedlessly,with futile chatter about our desires.&quot;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
