-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2022 às 04:28
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `texts`
--

CREATE TABLE `texts` (
  `text_id` int(50) UNSIGNED NOT NULL,
  `tittle` varchar(100) NOT NULL,
  `textt` text NOT NULL,
  `date` date NOT NULL,
  `image_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `texts`
--

INSERT INTO `texts` (`text_id`, `tittle`, `textt`, `date`, `image_name`) VALUES
(4, 'Batman Arkhan City', 'Batman Arkham City is one of the greatest adventures of the Knight of Darkness already created for the world of games. The Xbox compatible game 360, PS3, PS4 and Xbox One and PC have a scenario incredibly inspired by the gloomy Gotham City. Also, this action-adventure game in the world open also incorporates stealth and beat\'em up elements into its gameplay. Another strong point is the story and the way it develops. O game starts with Bruce Wayne being arrested as Hugo\'s mercenaries Strange, the game\'s main villain, who not only reveals the secret identity of the superhero to authorized it with the bandits, as well as intends a such “Protocol 10”, and the vigilante must prevent this action from starting. Sequel to Batman Arkham Asylum, the game now has a open world setting, and the player chooses to make their narrative linear or not - following story or side missions, while Batman soars through the skies of Gotham. The Bat will meet its most notorious enemies, as Two-Face, Victor Szasz, Mr. Freeze, Penguin,', '2022-09-15', '145c0460-3c6e-4936-ae30-8dd03de0d94a.jpg'),
(5, 'Hades', 'Zagreu, the prince of the Underworld, can no longer bear the evasive attitude of his father Hades. Dissatisfied with this situation, the young god decides escape from Hell in order to better understand its origins. The task is not easy, for the Underworld has a configuration that precisely prevents the souls (mortal or immortal) escape from there. even being defeated countless times, Zagreu does not give up and will persist in his goal. Hades is an action game with roguelike aspects. in control of young god, we try to escape the Underworld in an adventure focused on combats whose objective is to defeat all the monsters in a room to be able to move on to the next one. Zagreu has at its disposal some weapons, like a sword, a spear, a shield, and a javelin thrower, each which with different attacks and abilities. Furthermore, the boy charge to evade attacks and cross obstacles, and a special stone that can be thrown as a projectile. The Prince of the Underworld is not alone on this difficult journey: the others Olympian gods send their aid in the form of Boons that alter the protagonist\'s abilities. Power is related to the personality of the god, that is, Zeus provides electricity attacks that bounce between opponents, Aphrodite\'s strength is capable of weakening enemies, Poseidon provides water movements, while Athena\'s protection allows you to hit projectiles and much more. The variety of powers is large and allows you to assemble different strategies. Upon dying, Zagreu returns to Hades\' mansion, which means restart the journey from the beginning on the next attempt. as usual of roguelikes, the game has a lot of variety in the form of maps generated procedurally, distinct Boons, events, enemies, bosses and more, the that makes each game different from one another. actually the title is a representative of the lite variation of the genre by presenting permanent improvements between the various attempts — even dying, there are constant feeling of evolution.', '2022-09-15', 'a40463bb-6c68-4795-bcce-a5b491e43b66.jpg'),
(6, 'Red Dead Redemption 2', 'Red Dead Redemption 2 sets out to offer a journey that takes place in 1899, precisely 12 years before the previous one, at the turn of the century, with another protagonist: Arthur Morgan, an outlaw from Dutch\'s gang Van Der Linde, which John Marston is also a part of. The notorious gang has its own code of conduct, which involves loyalty, compassion and other principles that must be respected. O world was more hostile; nature and humans lived side by side and began to contemplate modernization, industrialization, the turn for the society of the future. Although there were some gangs left over from their times aureos, whose heyday took place in the second half of the 19th century, the authorities hunted down and dismantled these groups on the threshold of the 20th century, and the few remaining held out for a few years after the early 1990s. 1900. The end of the Wild West was inevitable, and you are in the middle of it. crossroads with a huge world to be explored, full of life wild and, of course, conspiracy twists. After eight years in development, Red Dead Redemption 2 carries, on its back, the responsibility of being Rockstar\'s first title in the current generation of consoles. All you need to know about the story is pretty simple: after a robbery happened in the worst possible way in Blackwater, which is one of the main regions from the previous game and here it has been expanded substantially, Dutch, Arthur and the rest of the gang seek shelter and must rebuild their forces through union. It would be unheard of if it weren\'t familiar: spectacular robberies have become so worshiped over time that their authors, thieves of intelligence unique, gained worldwide admiration, having been represented innumerable sometimes in cinema and other entertainment media.', '2022-09-15', 'fc7338ca-0767-4c0c-b9d0-e0ba253937c4.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`text_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `texts`
--
ALTER TABLE `texts`
  MODIFY `text_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
