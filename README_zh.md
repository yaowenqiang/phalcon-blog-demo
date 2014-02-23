如果你还不知道phalcon是什么，请按键盘上的ALT+F4，谢谢

本代码是参照官网的视频教程编写的，主要功能与视频中的一样，部分页面样式未做调整，在ubuntu 12.04系统php 5.5.9和apache2.4.7下测试通过，其他平台未测试

使用方法：

首先，你得先装好phalcon,具体步骤参考官网，有详细说明

然后，将代码庘clone至你的apache网站根目录下,保证你的blog文件夹下的.htaccess能够生效，

[可选] 安装phalcon的命令行工具

接着，修改app下的view目录的所有者为www.data.www.data（不要问我为什么，这个害我折腾了半天）

然后，创建数据庘blog，导入schema文件夹下面的blog.sql,修改app/config/cofig.php文件中的数据庘连接信息

最后，打开yoursite/blog/poll,vala,搞定!

如果安装使用过程中有什么问题，可以直接提交issue，我会及时回复的
