# Filter Linux Distributions using mysql

### How it works
Typically sql can make use multiple `or` and `and` clauses, we can implement this idea on web by using
checkboxes.<br/>

The database has multiple categores which has multiple checkboxes. If muliple checkboxes are selected then we
make use of `or` clause and each category is handled using `and` clause.

#### Example
The Distribution with following features
<pre>
* OS Type           - Linux, BSD or Other
* Based on          - FreeBSD or Arch
* Default Interface - Desktop
</pre>

##### SQL query
```mysql
Select * from DistroDB.Distroes where (
	Base='Arch' or
	Base='FreeBSD'
) and (
	OSType='BSD' or
	OSType='Linux' or
	OSType='Other'
) and (
	Category='Desktop'
);
```
### How to use
Clone this repository

```bash
git clone https://github.com/koku17/sql-project-aiml && cd sql-project-aiml/
```

Update SQL Database `DistroDB`

```bash
make setup
```

Start PHP server in the local port `8080`

```bash
make run
```

Open your browser (chromium) and go to

```
http://localhost:8080/
```

#### Example
Select the Choices and Click on `submit` <br/>
![image](ld1.png)
![image](ld2.png)
