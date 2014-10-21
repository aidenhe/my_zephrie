my_zephrie
==========

使用zephrie语法糖写PHP扩展的经验


zephire安装：
=================
1：php5.3+  phpize安装（yum install php-devl)

2：make自带3.81不需要安装

3：gcc gcc-c++安装

4：automake  autoconf 安装

5：re2c安装

6：libtool安装

7: yum install pcre-devel.i686 （libpcre安装）

Zephiir语法注意：
=====================
全局变量：$_GET $_POST $_SERVER 等可以使用

变量使用前先声明，

数组赋值之前需要初始化
var jsonvalue;
let jsonvalue = [];
let jsonvalue["html"] = html;

对象操时成员变量赋值不能使用变量
let childobject->plconfig = plconfig; //第一个plconfig当字符串处理，第二为变量

Class类的实例化
New 关键字后面所接参数为 字符串处理
var pid;
let pid = “autoload()”;
new pid; //pid当字符串处理
建议使用eval处理，（实例化php函数）


Private 方法，类内部调用，可以使用，不过会报waring


“”  ‘’ 双引号和单引号的使用
字符串使用””
单引号：
if strlen(text) != 0 {            let encoded = (string) base64_encode(text);            return '(' . encoded . ')';        }

 

