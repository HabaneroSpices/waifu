# SQL TABLE
```
CREATE TABLE torrents (
    torrent_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    torrent_name varchar(256) NOT NULL,
    torrent_desc text NOT NULL,
    torrent_path varchar(255) NOT NULL,
    torrent_cat varchar(45),
    torrent_seed int(11) DEFAULT 0,
    torrent_leech int(11) DEFAULT 0,
    torrent_date datetime DEFAULT CURRENT_TIMESTAMP,
    torrent_disabled tinyint(1)
    );
```

