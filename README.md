# Dokumentasi Proyek Cybertech Backend

Proyek Laravel ini bertujuan menyediakan RESTful API untuk mengelola pengguna, divisi, pertemuan, dan bergabung dalam pertemuan.

## Rute API

### Otentikasi

#### Registrasi Pengguna Baru
- **Endpoint**: /signup
- **Metode**: POST
- **Deskripsi**: Membuat akun pengguna baru.
- **Controller**: AuthController@signup

#### Masuk
- **Endpoint**: /signin
- **Metode**: POST
- **Deskripsi**: Mengautentikasi dan masuk sebagai pengguna.
- **Controller**: AuthController@signin

#### Dapatkan Semua Pengguna
- **Endpoint**: /get/users
- **Metode**: GET
- **Deskripsi**: Dapatkan informasi tentang semua pengguna (memerlukan otentikasi).
- **Middleware**: auth:sanctum
- **Controller**: AuthController@getAllUser

### Manajemen Divisi

#### Dapatkan Semua Divisi
- **Endpoint**: /divisi
- **Metode**: GET
- **Deskripsi**: Dapatkan daftar semua divisi.
- **Controller**: DivisiController@getDivisi

#### Buat Divisi Baru
- **Endpoint**: /divisi/create
- **Metode**: POST
- **Deskripsi**: Membuat divisi baru.
- **Controller**: DivisiController@createDivisi

#### Dapatkan Divisi berdasarkan ID
- **Endpoint**: /divisi/{id}
- **Metode**: GET
- **Deskripsi**: Dapatkan informasi tentang divisi tertentu berdasarkan ID.
- **Controller**: DivisiController@getByIdDivisi

#### Hapus Divisi
- **Endpoint**: /divisi/delete/{id}
- **Metode**: DELETE
- **Deskripsi**: Hapus divisi berdasarkan ID.
- **Controller**: DivisiController@deleteDivisi

#### Perbarui Divisi
- **Endpoint**: /divisi/update/{id}
- **Metode**: PUT
- **Deskripsi**: Perbarui informasi untuk divisi tertentu berdasarkan ID.
- **Controller**: DivisiController@updateDivisi

### Manajemen Pertemuan

#### Dapatkan Semua Pertemuan
- **Endpoint**: /meeting
- **Metode**: GET
- **Deskripsi**: Dapatkan daftar semua pertemuan.
- **Controller**: MeetingController@getMeeting

#### Buat Pertemuan
- **Endpoint**: /meeting/create
- **Metode**: POST
- **Deskripsi**: Membuat pertemuan baru.
- **Controller**: MeetingController@createMeeting

#### Dapatkan Pertemuan berdasarkan ID
- **Endpoint**: /meeting/{id}
- **Metode**: GET
- **Deskripsi**: Dapatkan informasi tentang pertemuan tertentu berdasarkan ID.
- **Controller**: MeetingController@getMeetingById

#### Hapus Pertemuan
- **Endpoint**: /meeting/delete/{id}
- **Metode**: DELETE
- **Deskripsi**: Hapus pertemuan berdasarkan ID.
- **Controller**: MeetingController@deleteMeeting

#### Perbarui Pertemuan
- **Endpoint**: /meeting/update/{id}
- **Metode**: PUT
- **Deskripsi**: Perbarui informasi untuk pertemuan tertentu berdasarkan ID.
- **Controller**: MeetingController@updateMeeting

### Bergabung dalam Pertemuan

#### Dapatkan Pertemuan Setelah Bergabung
- **Endpoint**: /join
- **Metode**: GET
- **Deskripsi**: Dapatkan informasi tentang pertemuan setelah bergabung (memerlukan otentikasi).
- **Middleware**: auth:sanctum
- **Controller**: JoinMeetingController@getMeetingAfterJoin

#### Bergabung dalam Pertemuan
- **Endpoint**: /join
- **Metode**: POST
- **Deskripsi**: Proses bergabung dalam pertemuan.
- **Controller**: JoinMeetingController@processJoinMeeting

## Model

### User Model

- **Fields**:
  - `name`
  - `email`
  - `password`
  - `role`
  - `gen`
  - `divisi_id`

- **Relationships**:
  - `divisi`: `belongsTo(Divisi::class, 'divisi_id')`

### Meeting Model

- **Fields**:
  - `name`
  - `date`
  - `time`
  - `location`
  - `author_id`
  - `token_meeting`

- **Relationships**:
  - `author`: `belongsTo(User::class, 'author_id')`

### JoinMeeting Model

- **Fields**:
  - `meeting_id`
  - `token_meeting`
  - `user_id`

- **Relationships**:
  - `meeting`: `belongsTo(Meeting::class, 'meeting_id')`
  - `user`: `belongsTo(User::class, 'user_id')`

### Divisi Model

- **Fields**:
  - `divisi_name`

- **Relationships**:
  - `user`: `hasMany(User::class)`
    
