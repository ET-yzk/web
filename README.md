## 项目记录

##### `template:网页主题文件夹` `ace:网页主题格式相关？全为'.js'文件`

- 针对很多学校希望自定义OJ界面风格的需求，对原代码进行了模板分离，

- 在template目录下存放模板，原有风格定义为classic。

- 在include/db_info.inc.php文件中$OJ_TEMPLATE用于指定模板名。

##### `bbs:用于放置PHPBB--一个可快速搭建的php论坛，需要自行设置，未预装`
##### `spj:判题相关词`
##### `sae:创建数据库`
##### `swadmin:公告编辑器页面相关？`
##### `test:个人测试`
- -
#### `web/mysql/judge--分布式部署方案`
- web：前台网页显示

- mysql：后台数据库

- *judge：后台判题机制

---

## 一、代码块
```javascript
$(document).ready(function () {
    alert('RUNOOB');
});
```

---

## 二、区块
> 最外层
> > 第一层嵌套
> > > 第二层嵌套

>> 区块中使用列表
 > 1. 第一项
 > 2. 第二项
 > + 第一项
 > + 第二项
 > + 第三项

---

## 三、标号
+
*
- 一、
    - 二、(前面加个制表符距离)

---

## 四、链接
<a href="超链接地址" target="_blank">超链接名</a>

这是一个链接 [百度](https://www.baidu.com)

这个链接用 Google 作为网址变量 [Google][Google]

这个链接用 baidu 作为网址变量 [Baidu][baidu]

然后在文档的结尾为变量赋值（网址）

  [Google]: http://www.google.com/
  [baidu]: http://www.baidu.com/

---

## 五、字体
**这是加粗的文字**

*这是倾斜的文字*

***这是斜体加粗的文字***

~~这是加删除线的文字~~

<u>带下划线文本</u>

---

## 六、表格
|  表头   | 表头  |
|  ----  | ----  |
| 单元格  | 单元格 |
| 单元格  | 单元格 |

| 左对齐 | 右对齐 | 居中对齐 |
| :-----| ----: | :----: |
| 单元格   嘎嘎嘎| 单元格  咕咕咕| 单元格 哈哈哈|
| 单元格 | 单元格 | 单元格 |

---

## 七、图片


![NOOB 图标](http://static.runoob.com/images/runoob-logo.png "NOOB")
###### 第二个鼠标置于图上现示注释部分，可不写，链接同

---

# OJ搭建方案(成本递增)

```
1.注册codeup.cn，开通校级账号，全网访问。
2.自建服务器，物理机虚拟机均可，校园网访问。
3.服务器托管学校机房，开通外网端口，外网访问。
4.使用新浪云挂Web端，内网判题，全网访问。
5.AWS免费服务器，低速全网访问。

————备案、收费的分割线————

6.廉价VPS，低速全网访问。
7.使用阿里云，高速全网访问。
8.新浪云挂Web，阿里云挂判题，利用新浪云提供域名及免费流量。
9.专用服务器，托管双线机房。
```