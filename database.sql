USE sports_booking;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    whatsapp VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    field VARCHAR(50) NOT NULL,
    ip_address VARCHAR(45),
    browser VARCHAR(255)
);
