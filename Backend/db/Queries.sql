CREATE TABLE Players(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    rating INT NOT NULL,
    photo VARCHAR(255) NOT NULL,
    position ENUM('ST', 'RW', 'LW', 'LB', 'RB', 'CB', 'CM', 'SS', 'AM', 'LM', 'RM', 'DM', 'GK', 'CDM') DEFAULT 'RW' NOT NULL,
    id_equipe INT NOT NULL,
    id_nationalite INT NOT NULL,
    FOREIGN KEY (id_equipe) REFERENCES Equipes(id),
    FOREIGN KEY (id_nationalite) REFERENCES Nationalites(id)
);

CREATE TABLE Equipes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    club VARCHAR(50) ON DELETE SET NULL ON UPDATE CASCADE,
    logo VARCHAR(255) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Nationalites(
    id INT PRIMARY KEY AUTO_INCREMENT,
    country VARCHAR(50) ON DELETE SET NULL ON UPDATE CASCADE,
    flag VARCHAR(255) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Statistics(
    id INT PRIMARY KEY AUTO_INCREMENT,
    pace INT NOT NULL,
    shooting INT NOT NULL,
    passing INT NOT NULL,
    defending INT NOT NULL,
    dribbling INT NOT NULL,
    physical INT NOT NULL,
    id_player INT NOT NULL,
    FOREIGN KEY (id_player) REFERENCES Players(id) ON DELETE CASCADE ON UPDATE CASCADE
);


-- CREATE TABLE GKStatistics(
--     id INT PRIMARY KEY AUTO_INCREMENT,
--     rating INT NOT NULL,
--     diving INT NOT NULL,
--     handling INT NOT NULL,
--     kicking INT NOT NULL,
--     reflexes INT NOT NULL,
--     speed INT NOT NULL,
--     positioning INT NOT NULL,
--     id_player INT NOT NULL,
--     FOREIGN KEY (id_player) REFERENCES Players(id)
-- );



-- INSERTION
-- INSERT INTO Players(name,  photo, position, id_equipe, id_nationalite) VALUES
-- ('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', "RW", 1, 1),
-- ('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', "ST", 2, 2),
-- ('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', "CM", 3, 3),
-- ('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', "ST", 4, 4),
-- ('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', "CB", 5, 5),
-- ('Gianluigi Donnarummau', 'https://cdn.sofifa.net/players/230/621/25_120.png', 'GK', 12, 14),
-- ('Yassine Bounou', 'https://cdn.sofifa.net/players/209/981/25_120.png', 'GK', 6, 12),
-- ('Antonio Rudiger', 'https://cdn.sofifa.net/players/205/452/25_120.png', 'CB', 4, 6),
-- ('Neymar Jr','https://cdn.sofifa.net/players/190/871/25_120.png', 'LW', 6, 7),
-- ('Mohamed Salah','https://cdn.sofifa.net/players/192/985/25_120.png', 'RW', 5, 8),
-- ('Joshua Kimmich','https://cdn.sofifa.net/players/212/622/25_120.png', 'CM', 9, 6),
-- ('Jan Oblak','https://cdn.sofifa.net/players/200/389/25_120.png', 'GK', 10, 9),
-- ('Luka Modrić','https://cdn.sofifa.net/players/177/003/25_120.png','CM', 4, 10),
-- ('Vinicius Junior','https://cdn.sofifa.net/players/238/794/25_120.png', 'LW', 4, 7),
-- ('Brahim Diáz','https://cdn.sofifa.net/players/231/410/25_120.png', 'LW', 4, 12);

INSERT INTO Players(name,  photo, rating, position, id_equipe, id_nationalite) VALUES
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 93, "RW", 1, 1),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 91, "ST", 2, 2),
('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 91, "CM", 3, 3),
('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 92, "ST", 4, 4),
('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 90, "CB", 5, 5),
('Gianluigi Donnarummau', 'https://cdn.sofifa.net/players/230/621/25_120.png', 89, 'GK', 12, 14),
('Yassine Bounou', 'https://cdn.sofifa.net/players/209/981/25_120.png', 84, 'GK', 6, 12),
('Antonio Rudiger', 'https://cdn.sofifa.net/players/205/452/25_120.png', 88, 'CB', 4, 6),
('Neymar Jr','https://cdn.sofifa.net/players/190/871/25_120.png', 90, 'LW', 6, 7),
('Mohamed Salah','https://cdn.sofifa.net/players/192/985/25_120.png', 89, 'RW', 5, 8),
('Joshua Kimmich','https://cdn.sofifa.net/players/212/622/25_120.png', 89, 'CM', 9, 6),
('Jan Oblak','https://cdn.sofifa.net/players/200/389/25_120.png', 91, 'GK', 10, 9),
('Luka Modrić','https://cdn.sofifa.net/players/177/003/25_120.png', 88, 'CM', 4, 10),
('Vinicius Junior','https://cdn.sofifa.net/players/238/794/25_120.png', 89, 'LW', 4, 7),
('Brahim Diáz','https://cdn.sofifa.net/players/231/410/25_120.png', 82, 'LW', 4, 12);



-- Insert Equipes (Teams/Clubs)
INSERT INTO Equipes (club, logo) VALUES 
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png'),
('Fenerbahçe', 'https://cdn.sofifa.net/meta/team/88/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png'),
('PSV', 'https://cdn.sofifa.net/meta/team/682/120.png');

-- Insert Nationalites
INSERT INTO Nationalites (country, flag) VALUES 
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('Italy', 'https://cdn.sofifa.net/flags/it.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png');

-- Insert Statistics
INSERT INTO Statistics (id_player, pace, shooting, passing, defending, dribbling, physical) VALUES 
(1, 85, 92, 91, 35, 95, 65),
(2, 84, 94, 82, 34, 87, 77),
(3, 74, 86, 93, 64, 88, 78),
(4, 97, 89, 80, 39, 92, 77),
(5, 75, 60, 70, 92, 72, 86),
(6, 82, 55, 73, 86, 70, 86),
(7, 91, 83, 86, 37, 94, 61),
(8, 93, 87, 81, 45, 90, 75),
(9, 70, 75, 88, 84, 84, 81),
(10, 89, 90, 78, 92, 50, 88),
(11,74, 78, 89, 72, 90, 65),
(12,91, 88, 85, 39, 94, 61),
(13,85, 74, 78, 31, 85, 56),
(14, 81, 82, 77, 86, 38, 83),
(15, 88, 84, 75, 90, 50, 85);



-- INSERT INTO GKStatistics (id_player, diving, handling, kicking, reflexes, speed, positioning) VALUES 
-- (10, 89, 90, 78, 92, 50, 88),
-- (14, 81, 82, 77, 86, 38, 83),
-- (15, 88, 84, 75, 90, 50, 85);












-- GET ALL PLAYERS

SELECT Players.name, Equipes.name, Nationalites.name, Players.rating, Statistics.* FROM Players JOIN Statistics ON Statistics.id_player = Players.id JOIN Nationalites ON Nationalites.id = Players.id_nationalite JOIN Equipes ON Equipes.id = Players.id_equipe;
