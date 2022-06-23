<?php
// DB 데이터 테이블 쿼리

/*
CREATE TABLE t_board (
  i_board int(10) unsigned NOT NULL AUTO_INCREMENT,
  title varchar(100) NOT NULL,
  ctnt varchar(2000) NOT NULL,
  i_user int(10) unsigned NOT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP,
  c_cnt int(11) DEFAULT '0',
  view_at int(10) DEFAULT '0',
  sel_board int(11) DEFAULT NULL,
  img_board varchar(100) DEFAULT NULL,
  PRIMARY KEY (i_board),
  FOREIGN KEY (i_user) REFERENCES t_user (i_user)
);

CREATE TABLE t_user (
  i_user int(10) unsigned NOT NULL AUTO_INCREMENT,
  user_id varchar(20) NOT NULL,
  user_pw varchar(30) NOT NULL,
  nm varchar(5) NOT NULL DEFAULT '',
  bank_nm varchar(10) DEFAULT NULL,
  bank_num varchar(30) DEFAULT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP,
  profile_img varchar(100) DEFAULT NULL,
  user_num varchar(30) DEFAULT NULL,
  PRIMARY KEY (i_user),
  UNIQUE KEY nm (nm),
  UNIQUE KEY user_id (user_id)
);


CREATE TABLE t_gg_sell (
  i_gonggu int(10) unsigned NOT NULL AUTO_INCREMENT,
  i_user int(10) unsigned NOT NULL,
  title varchar(100) NOT NULL,
  ctnt varchar(5000) NOT NULL DEFAULT '',
  product_nm varchar(100) NOT NULL,
  price int(10) NOT NULL,
  bank_nm varchar(10) NOT NULL,
  bank_num varchar(20) NOT NULL,
  bank_sell_user varchar(10) NOT NULL,
  start_day date NOT NULL,
  end_day date NOT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT CURRENT_TIMESTAMP,
  sel_board int(11) DEFAULT NULL,
  view_at int(11) DEFAULT '0',
  PRIMARY KEY (i_gonggu),
  FOREIGN KEY (i_user) REFERENCES t_user (i_user)
);

CREATE TABLE t_gg_buy (
  i_gonggu int(10) unsigned NOT NULL,
  i_user int(10) unsigned NOT NULL,
  buy_inv int(10) NOT NULL,
  buy_price varchar(10) NOT NULL,
  buy_unm varchar(10) NOT NULL,
  bank_nm varchar(10) NOT NULL,
  bank_num varchar(30) NOT NULL,
  bank_user varchar(10) NOT NULL,
  user_number varchar(30) NOT NULL,
  pickup_nm varchar(10) NOT NULL,
  addr varchar(100) NOT NULL,
  addr_part varchar(50) DEFAULT NULL,
  addr_num varchar(10) NOT NULL,
  memo varchar(1000) DEFAULT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (i_gonggu) REFERENCES t_gg_sell (i_gonggu),
  FOREIGN KEY (i_user) REFERENCES t_user (i_user)
);

CREATE TABLE t_com (
  i_user int(10) unsigned NOT NULL,
  i_board int(10) unsigned NOT NULL,
  i_com int(11) NOT NULL AUTO_INCREMENT,
  ctnt varchar(50) DEFAULT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (i_com),
  FOREIGN KEY (i_user) REFERENCES t_user (i_user),
  FOREIGN KEY (i_board) REFERENCES t_board (i_board)
);
*/