CREATE SCHEMA HelpUsDB;
CREATE USER 'HelpUs'@'localhost' IDENTIFIED BY 'HelpUs';
GRANT ALL PRIVILEGES ON HelpUsDB.* TO 'HelpUs'@'localhost';
FLUSH PRIVILEGES;