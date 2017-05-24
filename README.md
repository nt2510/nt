
## 前言

記錄屬於自己的程式，一個phper的知識體系



## 目录

- PHP    
  - php工作机制原理
  - 框架源码
  - 自己写框架
  - oop
  - spl、反射
  - php扩展

- Mysql

  - 常用sql语句
  - 引擎
    - InnoDB
    - MyISAM
    - Memory
    - Archive\Blackhole\CSV\Federated\merge\NDB
  - 事务隔离级别
    - READ UNCOMMITTED:未提交读
    - READ COMMITTED：提交读/不可重复读
    - REPEATABLE READ：可重复读(MYSQL默认事务隔离级别)
    - SERIALIZEABLE：可串行化
  - 索引
    - B-Tree
    - 哈希索引(hash index)
    - 空间数据索引(R-Tree)
    - 全文索引
  - 锁
    - 悲观锁
    - 乐观锁
  - 分表
    - 垂直分表
    - 水平分表
  - sql优化
  - 主从配置

- Redis(doing)

  - 常用命令
  - 实现原理&与memcache区别
  - 常见使用场景实战
    - [缓存]
    - [队列]
    - [悲观锁]
    - [乐观锁]
    - [订阅/推送]

- 设计模式(done/fixing)

  - [概念]

  - 创建型模式实例

    - [单例模式](https://github.com/lz2510/nt/tree/master/design_pattern/singleton)
    - [簡單工厂模式](https://github.com/lz2510/nt/tree/master/design_pattern/simple_factory)
    - [抽象工厂模式]
    - [原型模式]
    - [建造者模式](https://github.com/lz2510/nt/tree/master/design_pattern/builder)

  - 结构型模式实例

    - [桥接模式]
    - [享元模式]
    - [外观模式](https://github.com/lz2510/nt/tree/master/design_pattern/facade)
    - [适配器模式]
    - [装饰者模式](https://github.com/lz2510/nt/tree/master/design_pattern/decorator)
    - [组合模式](https://github.com/lz2510/nt/tree/master/design_pattern/composite)
    - [代理模式](https://github.com/lz2510/nt/tree/master/design_pattern/proxy)
    - [过滤器模式]

  - 行为型模式实例

    - [模板模式](https://github.com/lz2510/nt/tree/master/design_pattern/template_method)
    - [策略模式](https://github.com/lz2510/nt/tree/master/design_pattern/strategy)
    - [状态模式]
    - [观察者模式](https://github.com/lz2510/nt/tree/master/design_pattern/observer)
    - [责任链模式]
    - [访问者模式]
    - [解释器模式]
    - [备忘录模式]
    - [命令模式](https://github.com/lz2510/nt/tree/master/design_pattern/command)
    - [迭代器模式]
    - [中介者器模式]
    - [空对象模式]

- [数据结构(doing)]

  - 数组
  - 堆/栈
  - 树
  - 队列
  - 链表
  - 图
  - 散列表

- 算法(doing)

  - 算法分析

    - 时间复杂度/空间复杂度/正确性/可读性/健壮性

  - 算法实战

    - 排序算法(α)

      - [冒泡排序](https://github.com/lz2510/nt/blob/master/algorithm/sort.php)
      - [快速排序]
      - [选择排序](https://github.com/lz2510/nt/blob/master/algorithm/sort.php)
      - [插入排序](https://github.com/lz2510/nt/blob/master/algorithm/sort.php)
      - [归并排序]
      - [希尔排序]
      - [基数排序]

- 网络基础(doing)

  - [互联网协议概述]
  - [client和nginx简易交互过程]
  - [nginx和php-fpm简易交互过程]
  - [http]
    - 报文
      - 报文头部
      - 报文体
    - 常见13种状态码
    - 方法method
    - https
    - http2
    - websocket

- 计算机基础(doing)

  - [linux常用命令]
  - shell

- 高并发相关(not-start)
