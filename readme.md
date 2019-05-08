# IMISU HIS POC by NothingDone Inc.
 บริษัท NothingDone Inc. นายจ้างของคุณได้เข้าร่วมการนำเสนอระบบ HIS (Hospital Information System) ให้แก่คณะกรรมการสารสนเทศภาควิชาอายุรศาสตร์ (IMISU)

 ในขั้นต้นนี้เป็นการทำ POC (Prove of Concept) เพื่อแข่งขันหาผู้ชนะไปพัฒนาระบบ HIS ให้กับทาง IMISU

 คุณปั๊ก CEO ของคุณได้ขอให้คุณเขียนโปรแกรมเพื่อใช้ในการทำ POC ดังต่อไปนี้

 ## Database
 ```
 # divisions table
 - increments: id
 - string: name
 - timestamp: created_at
 - timestamp: updated_at

 # patients table
 - increments: id
 - string: first_name
 - string: last_name
 - date: dob // date of birth
 - integer: division_id FK on divisions
 - timestamp: created_at
 - timestamp: updated_at

 # treatments table
 - increments: id
 - string: name // ชื่อการรักษาที่ผู้ป่วยได้รับ
 - integer: patient_id FK on patients
 - timestamp: created_at // วันเวลาที่ได้รับการรักษานี้
 - timestamp: updated_at
```

### divisions table
ตารางเก็บข้อมูลแผนกในระบบ HIS เช่นแผนกโรคทางเดินอาหาร แผนกโรคหัวใจ เป็นต้น โดยมีความสัมพันธ์กับ patients table ดังนี้

`division has many patients`

### patients table
ตารางเก็บข้อมูลผู้ป่วย โดยมีความสัมพันธ์กับ divisions table ดังนี้

`patient belongs to division`

และมีความสัมพันธ์กับ treatments table ดังนี้

`patient has many treatments`

### treatments table
ตารางเก็บข้อมูลประวัติการรับการรักษาของผู้ป่วย โดยมีความสัมพันธ์กับ patients table ดังนี้

`treatment belongs to patient`

### Seeders
ใน code base มี seeders สำหรับสร้างข้อมูลทดสอบทั้ง 3 ตารางไว้ให้พร้อมแล้ว แต่ก่อนที่จะสามารถทำการ seed ได้จะต้องเขียน migration และ model ให้พร้อมใช้งานก่อน อธิบายการทำงานงาน seeders ดังนี้

1. สร้างข้อมูลในตาราง division จำนวน 20 แผนก
2. สร้างข้อมูลผู้ป่วยพร้อมทั้งผูกกับแผนก(แบบสุ่ม)จำนวน 100 คน
3. สร้างข้อมูลการรับการรักษาของผู้ป่วยแต่ละคน คนละ 10 การรักษา ดังนั้นตาราง treatments จะมีข้อมูล 1000 records

## Requirements
1. สร้างหน้า register และ login สำหรับเข้าใช้งานระบบ

2. สร้างหน้า Pateints Index ในรูปแบบ pagination โดยแสดงหน้าละ 20 คน โดยจะสามารถเข้าสู่หน้านี้ได้ก็ต่อเมื่อเป็น user ที่ login แล้วเท่านั้น

3. หน้า index ประกอบไปด้วย columns ดังต่อไปนี้
    - Patient Name
    - DOB ในรูปแบบ MMM dd, YYYY
    - Division Name
    - Last treatment date
    - Last treatment name

4. ทำให้สามารถเรียงข้อมูลได้จากทุก column

5. ทำช่อง text search ซึ่งจะนำไปค้นหาในชื่อ นามสกุลและชื่อแผนกของผู้ป่วย

*ให้ implement โดยการ forge ไปเป็น repo ของตนเอง*
