<?php

Db::table('userlist')->field('balance')->where('id',$uid)->find();

Db::table('userlist')->where('id',$uid)->select();

Db::table('feedback')->insert();

field