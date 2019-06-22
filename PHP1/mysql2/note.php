- He quan tri CSDL su dung de luu tru du lieu
- Co so du lieu mysql la mot ma nguon mo, su dung cong cu phpmyadmin de quan ly csdl. Truy cap phpmyadmin: http://localhost/phpmyadmin
- Trong he quan tri csdl Mysql se co cau truc nhu sau
	- Database -> co the chua nhieu database
		- Table -> co the co nhieu table
			- Field -> ten cot
			- Record -> cac hang du lieu

- Khoa chinh: la thanh phan ton tai duy nhat trong mot bang, khong duoc giong nhau o cac ban ghi
	- Trong lap trinh web, cot khoa chinh thuong se la cot tu dong tang -> AI -> Auto Increment
- Khoa ngoai: la mot cot o trong mot bang su dung de anh xa den cot khoa chinh cua bang khac nham so khop thong tin

- Mot so kieu du lieu
	- varchar: la kieu string, co do lon <=4000 ky tu. Voi kieu du lieu nay phai set do rong
	- text: la kieu string, co do rong lon hon kieu varchar, tinh bang byte	
	- int: la kieu so nguyem
	- float: la kieu so thuc
	- bit: la kieu giu lieu chi co 2 gia tri 0,1
	- date: la kieu ngay thang. dinh dang: nam-thang-ngay. VD: 1995-12-20
	- datetime: la kieu ngay thang thoi gian
	- Chu y: voi cac kieu du lieu: varchar, text, date, datetime thi phai co dau nhay bao quanh du lieu. VD: "Hello", "1995-10-11". Voi cac kieu so thi chi can ghi so binh thuong

- Truy van csdl
	- select * from tenbang -> chon tat ca cac cot
	- select cot1,cot2... from tenbang -> chon huu han so luong cot	
	- select cot1 as "đặt tên cột" from tenbang -> dat ten cot hien thi
	- tu khoa where: so-sanh de lay dung ban ghi can thiet
		- so-sanh: la cac phep so sanh de tra ve ket qua la true hoac false, su dung cac toan tu >,>=,<,<=,=,<> de so sanh
		- Cac toan tu so sanh:
			- Lon hon -> >
			- Lon hon hoac bang -> >=
			- Nho hon -> <
			- Nho hon hoac bang -> <=
			- So sanh bang nhau -> =
			- So sanh khac nhau -> <>
		- Toan tu ket hop so sanh
			- ket hop voi dieu kien va -> and
			- ket hop voi dieu kien hoac -> or
		- Cau truc: where tencot phep-toan-so-sanh giatri -> se lay cac ban ghi tuong ung thoa man dieu kien
		- Tu khoa in:
			- Cau truc: where tencot in (giatri1,giatri2...) -> chon lua ban ghi trong tap hop cac gia tri
		- Tu khoa not in:
			- Cau truc: where tencot not in (giatri1, giatri2...) -> chon lua ban ghi khong nam trong tap hop cac gia tri
		- Tu khoa like: tim kiem trong chuoi muon tim
			- where tencot like "%chuoi" -> ket thuc bang tu khoa chuoi
			- where tencot like "chuoi%" -> bat dau bang tu khoa chuoi
			- where tencot like "%chuoi%" -> co chua tu khoa chuoi
		- truy van con:
			- Cau truc: where tencot toan-tu-so-sanh (menh-de-truy-van-con)
				- Chu y: ket qua tra ve cua menh-de-truy-van-con phai co kieu du lieu trung voi kieu du lieu cua tencot
	- Tu khoa order by: sap xet theo thu tuc tangdan/giamdan cua gia tri theo ten cot
		- Cau truc: order by tencot asc/desc
	- tu khoa limit: lay bao nhieu ban ghi
		- Cau truc: limit tubanghi,soluongcanlay
		- Chu y: ban ghi dau tien la ban ghi thu 0
Buoi toi:
	- cac ham uoc luong: max, min, avg, count, sum ...
		- max(tencot) -> lay gia tri lon nhat cua ban ghi ben trong cot do
		- min(tencot) -> lay gia tri nho nhat cua ban ghi bon trong cot do
		- avg(tencot) -> lay gia tri trung binh cua tat cac cac ban ghi trong cot do
		- count(tencot) -> dem so luong cac ban ghi trong cot do
		- sum(tencot) -> tinh tong cua cac ban trong cot do
	- group by -> lay gia tri chung cua cac cot theo nhom blog de thuc hien voi cac ham avg, sum, min, max...
	- having -> thay cho tu khoa where khi thuc hien doi voi cac ham mix,max,avg,sum,count...
	
	- insert -> them ban ghi
		- insert into tenbang(cot1,cot2...) values(giatri1,giatri2...)
		- insert into tenbang set cot1=giatri1,cot2=giatri2...
		- Chu y: neu giatri la kieu so thi ghi so binh thuong, neu gia tri la mot trong cac kieu (varchar,text,date,datetime) thi phai co dau nhay bao quanh gia tri
	- update -> chinh sua noi dung cua ban ghi
		- update tenbang set tencot1=giatri1,tencot2=giatri2 ... where ...
		- Chu y: khong khong su dung dieu kien where thi tat ca cac cot cua bang tuong ung se bi update
	- delete
		- delete from tenbang where ...
		- Chu y: neu khong su dung dieu kien where thi toan bo cac ban ghi trong bang se bi xoa
	- Su dung php de vao ra du lieu tren nen web		
	-limit : lay bao nhieu ban ghi
		limit tu_ban_ghi, lay_bao-nhieu-ban-ghi
		chu y:ban gi dau tien la ban 0.
	-chi nen dung where khi chon ra 1 ban ghi, tu 2 ban ghi tro len thi thi su dung IN,NOTIN

	NOTE: select-> from-> where-> order by-> group by ->having-> limit
		having di vs ham uoc luong(min, max, count,...)
		where su dung khi so sanh chuoi

-> Truy van con.
select hovaten,ngaysinh,quequan,(select tenphongban from phongban where phongban.maphongban=nhanvien.maphongban) as"tenphongban",(select chucdanh from chucdanh where chucdanh.machucdanh=nhanvien.machucdanh) as "chucdanh" from nhanvien

join cac bang voi nhau
	* inner join(ket hop 2 bang voi nhau ,khop noi cac bang voi nhau dua tren cac cot co cung kieu du lieu (chi can cung kieu du lieu, khong can cung ten)
	-select tencot from bang1 inner join bang2 on bang1.tencot=bang2.tencot where,order by,group by,limit,...
	select * from phongban inner join nhanvien on phongban.maphongban=nhanvien.maphongban

	_hien thi hovaten,tenphongban,ngaysinh,quequan cua cac  nhan vien co tenphongban="phongkythuat"
	  	-select hovaten,tenphongban,ngaysinh,quequan from phongban inner join nhanvien on phongban.maphongban=nhanvien.maphongban where tenphongban="phongkythuat";
	_hien thi hovaten,tenphongban,tenchucdanh cua tat ca cac nhan vien
		-select hovaten,tenphongban,tenchucdanh from nhanvien inner join phongban  on nhanvien.maphongban=phongban.maphongban inner join chucdanh on nhanvien.machucdanh=chucdanh.machucdanh;

	* left join 
		-ve ban chat giong inner join,khac nhau la left join se hien thi tat ca cac cot o bang ben trai, neu khong khop hay ben phai khong co  thi cot do se hien thi null;
		vd: select * from phongban left join nhanvien on nhanvien.maphongban=phongban.maphongban

	* right join(tuong tu)
		vd: select * from nhanvien left join phongban on nhanvien.maphongban=phongban.maphongban

	* insert into ten_bang(cot1,cot2,...) values(giatri1.giatri2,...) -> them du lieu
		insert into tenbang set cot1=giatri1, cot2=giatri2,...
		vd:insert into phongban(tenphongban) value("Phong quan tri");
		insert into nhanvien set maphongban=1,machucdanh=3,hovaten="Nguyen Van anh Hung",ngaysinh="1996-20-8",quequan="Hai Phong",luong=9000000;   

	*update: hcinh sua gia tri cua cac ban ghi
	update from tenbang set cot1=gia1,cot2=gt2... where....
	note:
		update cot nao thi cot day thay doi
		neu khong co dk where thi tat ca cac ban hi trong cot dp se thay doi

	- Mot so ham truy van:
		- mysqli_query($bien-ket-noi,cau-lenh-sql)->thuc thi cau truy van, ket qua tra ve 1 bien object
		- mysqli_fetch_object(bien object) -> duyet qua tung phan tu cua bien object, ket qua tra ve 1 object
		- mysqli_num_rows ->tra ve so luong ban ghi
		- mysqli_insert_id -> lay id vua moi insert
		- mysqli_set_charset ->lay du lieu theo kieu Unicode