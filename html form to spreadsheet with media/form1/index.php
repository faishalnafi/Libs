

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ulang SPMB SMA Negeri 3 Kota Mojokerto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }
        .logo-container {
            height: 120px;
            width: 120px;
            overflow: hidden;
            margin: 0 auto;
        }
        .wave-bg {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;
            opacity: 0.7;
        }
        .file-input-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .file-input-wrapper input[type=file] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .file-name {
            margin-top: 0.25rem;
            font-size: 0.875rem;
            color: #4f46e5;
        }
        .file-error {
            margin-top: 0.25rem;
            font-size: 0.875rem;
            color: #ef4444;
        }
        .upload-info {
            margin-top: 0.25rem;
            font-size: 0.75rem;
            color: #6b7280;
        }
    </style>
</head>
<body class="min-h-screen relative">
    <!-- Wave Background -->
    <div class="wave-bg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4f46e5" fill-opacity="0.5" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,218.7C672,235,768,245,864,234.7C960,224,1056,192,1152,176C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Login Section -->
    <div id="loginSection" class="container mx-auto px-4 py-12">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-8">
            <div class="p-8">
                <div class="logo-container mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#4f46e5" class="w-full h-full">
                        <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
                        <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
                    </svg>
                </div>
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">SMA Negeri 3 Kota Mojokerto</h1>
                    <p class="text-gray-600">Sistem Pendaftaran Ulang Murid Baru</p>
                    <p class="text-indigo-600 font-medium">Tahun Pelajaran 2025/2026</p>
                </div>
                
                <div id="loginForm" class="space-y-4">
                    <div>
                        <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                        <input type="text" id="nisn" name="nisn" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                        <p class="text-xs text-gray-500 mt-1">Format tanggal sesuai dengan data pendaftaran</p>
                    </div>
                    <div>
                        <button type="button" id="loginButton" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Masuk
                        </button>
                    </div>
                    <div id="loginError" class="text-red-500 text-sm text-center hidden">
                        NISN atau tanggal lahir tidak valid. Silakan coba lagi.
                    </div>
                    <div id="loadingIndicator" class="text-center hidden">
                        <div class="inline-block animate-spin rounded-full h-5 w-5 border-t-2 border-b-2 border-indigo-600"></div>
                        <span class="ml-2 text-sm text-gray-600">Memuat data...</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center text-gray-600 text-sm">
            <p>© 2024 SMA Negeri 3 Kota Mojokerto. Hak Cipta Dilindungi.</p>
        </div>
    </div>

    <!-- Registration Form Section (Hidden by default) -->
    <div id="registrationSection" class="container mx-auto px-4 py-8 hidden">
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-8">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Pendaftaran Ulang</h2>
                        <p class="text-gray-600">SMA Negeri 3 Kota Mojokerto</p>
                    </div>
                    <div class="text-right">
                        <p id="userJalur" class="text-sm font-medium text-indigo-600"></p>
                        <button id="logoutButton" class="text-sm text-gray-500 hover:text-gray-700">Keluar</button>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <form id="daftarUlangForm" class="space-y-8" enctype="multipart/form-data">
                        <!-- Hidden fields for Google Script -->
                        <input type="hidden" name="action" value="uploadFiles">
                        
                        <!-- Data Diri Section -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Data Diri</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="form-nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <input type="text" id="form-nama" name="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" readonly>
                                </div>
                                <div>
                                    <label for="form-nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                                    <input type="text" id="form-nisn" name="nisn" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" readonly>
                                </div>
                                <div>
                                    <label for="form-tgl-lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                    <input type="text" id="form-tgl-lahir" name="tgl-lahir" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" readonly>
                                </div>
                                <div>
                                    <label for="form-tpt-lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                                    <input type="text" id="form-tpt-lahir" name="tpt-lahir" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Upload Dokumen Section -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Upload Dokumen (PDF maksimal 1MB)</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Dokumen KK -->
                                <div>
                                    <label for="dok-kk" class="block text-sm font-medium text-gray-700 mb-1">Dokumen KK</label>
                                    <div class="file-input-wrapper">
                                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                            Pilih File
                                        </button>
                                        <input type="file" id="dok-kk" name="dok-kk" accept=".pdf" data-max-size="1048576" data-type="KK" required>
                                    </div>
                                    <div class="file-name" id="dok-kk-name"></div>
                                    <div class="file-error" id="dok-kk-error"></div>
                                    <div class="upload-info" id="dok-kk-info"></div>
                                    <input type="hidden" id="dok-kk-path" name="dok-kk-path" value="">
                                </div>
                                
                                <!-- Akta Kelahiran -->
                                <div>
                                    <label for="dok-akta" class="block text-sm font-medium text-gray-700 mb-1">Akta Kelahiran</label>
                                    <div class="file-input-wrapper">
                                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                            Pilih File
                                        </button>
                                        <input type="file" id="dok-akta" name="dok-akta" accept=".pdf" data-max-size="1048576" data-type="Akta" required>
                                    </div>
                                    <div class="file-name" id="dok-akta-name"></div>
                                    <div class="file-error" id="dok-akta-error"></div>
                                    <div class="upload-info" id="dok-akta-info"></div>
                                    <input type="hidden" id="dok-akta-path" name="dok-akta-path" value="">
                                </div>
                                
                                <!-- Nilai Rapor -->
                                <div>
                                    <label for="dok-rapor" class="block text-sm font-medium text-gray-700 mb-1">Nilai Rapor (semester 1-5)</label>
                                    <div class="file-input-wrapper">
                                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                            Pilih File
                                        </button>
                                        <input type="file" id="dok-rapor" name="dok-rapor" accept=".pdf" data-max-size="1048576" data-type="Rapor" required>
                                    </div>
                                    <div class="file-name" id="dok-rapor-name"></div>
                                    <div class="file-error" id="dok-rapor-error"></div>
                                    <div class="upload-info" id="dok-rapor-info"></div>
                                    <input type="hidden" id="dok-rapor-path" name="dok-rapor-path" value="">
                                </div>
                                
                                <!-- Pas Foto -->
                                <div>
                                    <label for="pas-foto" class="block text-sm font-medium text-gray-700 mb-1">Pas Foto 4x3 (jpg/png maks 500KB)</label>
                                    <div class="file-input-wrapper">
                                        <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                            Pilih File
                                        </button>
                                        <input type="file" id="pas-foto" name="pas-foto" accept=".jpg,.jpeg,.png" data-max-size="512000" data-type="Foto" required>
                                    </div>
                                    <div class="file-name" id="pas-foto-name"></div>
                                    <div class="file-error" id="pas-foto-error"></div>
                                    <div class="upload-info" id="pas-foto-info"></div>
                                    <input type="hidden" id="pas-foto-path" name="pas-foto-path" value="">
                                </div>
                            </div>
                        </div>

                        <!-- Debug Info Section -->
                        <div class="bg-gray-50 p-4 rounded-md">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">Informasi Upload</h4>
                            <div id="uploadDebugInfo" class="text-xs text-gray-600">
                                Belum ada file yang diunggah
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" id="submitButton" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Kirim Pendaftaran
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Already Registered Section -->
    <div id="alreadyRegisteredSection" class="container mx-auto px-4 py-12 hidden">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="p-8">
                <div class="text-center mb-6">
                    <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h2 class="mt-4 text-2xl font-bold text-gray-800">Pendaftaran Sudah Selesai</h2>
                </div>
                
                <div class="text-center mb-8">
                    <p class="text-gray-600 mb-4">Anda telah menyelesaikan proses pendaftaran ulang.</p>
                    <p class="text-gray-600 mb-4">Silakan datang ke SMA Negeri 3 Kota Mojokerto sesuai jadwal yang telah ditentukan untuk proses selanjutnya.</p>
                    <p class="text-gray-600 font-medium">Terima kasih atas partisipasi Anda.</p>
                </div>
                
                <div class="border-t border-gray-200 pt-4">
                    <div id="registeredStudentInfo" class="mb-6">
                        <p class="text-sm text-gray-600 mb-1">Nama: <span id="reg-nama" class="font-medium"></span></p>
                        <p class="text-sm text-gray-600 mb-1">NISN: <span id="reg-nisn" class="font-medium"></span></p>
                        <p class="text-sm text-gray-600">Jalur: <span id="reg-jalur" class="font-medium"></span></p>
                    </div>
                    
                    <button id="backToLoginButton" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kembali ke Halaman Login
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <h3 class="text-xl font-bold text-gray-900 mt-4">Pendaftaran Berhasil!</h3>
                <p class="text-gray-600 mt-2">Data pendaftaran ulang Anda telah berhasil dikirim.</p>
                <p class="text-gray-600 mt-4 font-medium">Silakan datang ke SMA Negeri 3 Kota Mojokerto sesuai jadwal untuk melakukan verifikasi berkas daftar ulang.</p>
                <button id="closeSuccessModal" class="mt-6 w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Upload Progress Modal -->
    <div id="uploadProgressModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-md w-full">
            <div class="text-center">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-4 border-b-4 border-indigo-600 mb-4"></div>
                <h3 class="text-xl font-bold text-gray-900">Mengunggah File</h3>
                <p class="text-gray-600 mt-2">Mohon tunggu sementara file Anda sedang diunggah...</p>
                <div id="uploadProgressInfo" class="mt-4 text-sm text-gray-500"></div>
            </div>
        </div>
    </div>

    <script>
        // Student databases
        let studentDatabase = [];
        let registeredStudents = [];
        let dataLoaded = {
            mainDb: false,
            registeredDb: false
        };
        
        // Google Script URL
        const SCRIPT_URL = "https://script.google.com/macros/s/AKfycbzzBXQ_1z_KRxJUa4bDvsY3lfZXgE4fNPlYyFI_2VGtVzJbUyp8nOrdrr-oeKbLhkgO/exec";
        
        // Format date from input date to match CSV format
        function formatDateForComparison(dateString) {
            if (!dateString) return '';
            
            // If it's already in YYYY-MM-DD format (from the database)
            if (/^\d{4}-\d{2}-\d{2}$/.test(dateString)) {
                return dateString;
            }
            
            // If it's in the date input format (YYYY-MM-DD from input)
            // We don't need to convert it since the database uses the same format
            return dateString;
        }
        
        // Fetch main CSV data
        fetch('https://docs.google.com/spreadsheets/d/e/2PACX-1vSvAamjEROw4jdKK44bb-YIlir2373vSgjkzNhWgEGTzy4D5lrXOzptEaIkNJ7FQJBIvUKPZCfKyBDE/pub?gid=0&single=true&output=csv')
            .then(response => response.text())
            .then(data => {
                // Parse CSV
                const rows = data.split('\n');
                const headers = rows[0].split(',');
                
                for (let i = 1; i < rows.length; i++) {
                    const values = rows[i].split(',');
                    if (values.length === headers.length) {
                        const student = {};
                        headers.forEach((header, index) => {
                            student[header.trim()] = values[index].trim();
                        });
                        studentDatabase.push(student);
                    }
                }
                
                dataLoaded.mainDb = true;
                console.log('Main database loaded successfully');
                console.log('Sample student data:', studentDatabase[0]);
                checkAllDataLoaded();
            })
            .catch(error => {
                console.error('Error loading student database:', error);
                dataLoaded.mainDb = true;
                checkAllDataLoaded();
            });
            
        // Fetch registered students CSV data
        fetch('https://docs.google.com/spreadsheets/d/e/2PACX-1vTPxHvYExf-gNLbXmoYknSC8OmwMVBVjQDPrEy8DmdInHgkHKJsOx9Uflrk-wuFUVaFO4zH0syioI7H/pub?gid=0&single=true&output=csv')
            .then(response => response.text())
            .then(data => {
                // Parse CSV
                const rows = data.split('\n');
                const headers = rows[0].split(',');
                
                // Find the index of the nisn column
                const nisnIndex = headers.findIndex(header => header.trim().toLowerCase() === 'nisn');
                
                if (nisnIndex !== -1) {
                    for (let i = 1; i < rows.length; i++) {
                        const values = rows[i].split(',');
                        if (values.length > nisnIndex) {
                            const nisn = values[nisnIndex].trim();
                            if (nisn) {
                                registeredStudents.push(nisn);
                            }
                        }
                    }
                } else {
                    console.error('NISN column not found in the registered students CSV');
                }
                
                dataLoaded.registeredDb = true;
                console.log('Registered students database loaded successfully');
                console.log('Registered NISNs:', registeredStudents);
                checkAllDataLoaded();
            })
            .catch(error => {
                console.error('Error loading registered students database:', error);
                dataLoaded.registeredDb = true;
                checkAllDataLoaded();
            });
            
        function checkAllDataLoaded() {
            if (dataLoaded.mainDb && dataLoaded.registeredDb) {
                document.getElementById('loadingIndicator').classList.add('hidden');
                document.getElementById('loginButton').disabled = false;
            }
        }
        
        // Login functionality
        document.getElementById('loginButton').addEventListener('click', function() {
            const nisn = document.getElementById('nisn').value;
            const passwordInput = document.getElementById('password').value;
            const errorElement = document.getElementById('loginError');
            const loadingIndicator = document.getElementById('loadingIndicator');
            
            // Format the date from the date input (YYYY-MM-DD)
            const password = formatDateForComparison(passwordInput);
            
            // Show loading indicator
            errorElement.classList.add('hidden');
            loadingIndicator.classList.remove('hidden');
            this.disabled = true;
            
            console.log('Attempting login with NISN:', nisn, 'and date:', password);
            
            // Find student in database
            const student = studentDatabase.find(s => {
                const match = s.nisn === nisn && s['tgl-lahir'] === password;
                if (match) {
                    console.log('Found matching student:', s);
                }
                return match;
            });
            
            if (student) {
                // Check if student has already registered
                if (registeredStudents.includes(nisn)) {
                    // Show already registered section
                    document.getElementById('loginSection').classList.add('hidden');
                    document.getElementById('alreadyRegisteredSection').classList.remove('hidden');
                    
                    // Fill student info
                    document.getElementById('reg-nama').textContent = student.nama;
                    document.getElementById('reg-nisn').textContent = student.nisn;
                    document.getElementById('reg-jalur').textContent = student.jalur;
                } else {
                    // Show registration form
                    document.getElementById('loginSection').classList.add('hidden');
                    document.getElementById('registrationSection').classList.remove('hidden');
                    
                    // Fill form with student data
                    document.getElementById('form-nama').value = student.nama;
                    document.getElementById('form-nisn').value = student.nisn;
                    document.getElementById('form-tgl-lahir').value = student['tgl-lahir'];
                    document.getElementById('userJalur').textContent = 'Jalur: ' + student.jalur;
                }
            } else {
                // Show error message
                errorElement.classList.remove('hidden');
                console.log('No matching student found');
            }
            
            // Hide loading indicator
            loadingIndicator.classList.add('hidden');
            this.disabled = false;
        });
        
        // Update debug info
        function updateUploadDebugInfo() {
            const debugInfo = document.getElementById('uploadDebugInfo');
            const fileInputs = document.querySelectorAll('input[type="file"]');
            let infoText = '';
            
            fileInputs.forEach(input => {
                if (input.files && input.files.length > 0) {
                    const file = input.files[0];
                    const path = input.getAttribute('data-path');
                    const nisn = document.getElementById('form-nisn').value;
                    const fileType = input.getAttribute('data-type');
                    const fileExtension = file.name.split('.').pop();
                    const newFileName = `${nisn}_${fileType}.${fileExtension}`;
                    const fullPath = `${path}/${newFileName}`;
                    
                    infoText += `• ${input.name}: ${file.name} → ${fullPath}<br>`;
                    
                    // Update hidden path field
                    const pathField = document.getElementById(`${input.id}-path`);
                    if (pathField) {
                        pathField.value = fullPath;
                    }
                }
            });
            
            if (infoText === '') {
                debugInfo.innerHTML = 'Belum ada file yang diunggah';
            } else {
                debugInfo.innerHTML = infoText;
            }
        }
        
        // File input handling
        const fileInputs = document.querySelectorAll('input[type="file"]');
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const fileNameElement = document.getElementById(`${this.id}-name`);
                const fileErrorElement = document.getElementById(`${this.id}-error`);
                const fileInfoElement = document.getElementById(`${this.id}-info`);
                const pathField = document.getElementById(`${this.id}-path`);
                
                // Clear previous messages
                fileNameElement.textContent = '';
                fileErrorElement.textContent = '';
                fileInfoElement.textContent = '';
                
                if (this.files.length > 0) {
                    const file = this.files[0];
                    const maxSize = parseInt(this.getAttribute('data-max-size'));
                    const path = this.getAttribute('data-path');
                    const nisn = document.getElementById('form-nisn').value;
                    const fileType = this.getAttribute('data-type');
                    
                    // Check file size
                    if (file.size > maxSize) {
                        const maxSizeMB = maxSize / (1024 * 1024);
                        const maxSizeKB = maxSize / 1024;
                        const sizeText = maxSize >= 1048576 ? `${maxSizeMB} MB` : `${maxSizeKB} KB`;
                        
                        fileErrorElement.textContent = `Ukuran file terlalu besar. Maksimal ${sizeText}.`;
                        this.value = ''; // Clear the file input
                        if (pathField) pathField.value = '';
                    } else {
                        // Display file name
                        fileNameElement.textContent = file.name;
                        
                        // Get file extension
                        const fileExtension = file.name.split('.').pop();
                        
                        // Create a new filename with NISN
                        const newFileName = `${nisn}_${fileType}.${fileExtension}`;
                        
                        // Display upload info
                        fileInfoElement.textContent = `File akan disimpan sebagai: ${newFileName}`;
                        
                        // Create full path
                        const fullPath = `${path}/${newFileName}`;
                        
                        // Update hidden path field
                        if (pathField) {
                            pathField.value = fullPath;
                        }
                        
                        // Update debug info
                        updateUploadDebugInfo();
                    }
                } else {
                    if (pathField) pathField.value = '';
                }
            });
        });
        
        // Logout functionality
        document.getElementById('logoutButton').addEventListener('click', function() {
            document.getElementById('loginSection').classList.remove('hidden');
            document.getElementById('registrationSection').classList.add('hidden');
            document.getElementById('nisn').value = '';
            document.getElementById('password').value = '';
            
            // Clear file inputs
            fileInputs.forEach(input => {
                input.value = '';
                const fileNameElement = document.getElementById(`${input.id}-name`);
                const fileErrorElement = document.getElementById(`${input.id}-error`);
                const fileInfoElement = document.getElementById(`${input.id}-info`);
                const pathField = document.getElementById(`${input.id}-path`);
                if (fileNameElement) fileNameElement.textContent = '';
                if (fileErrorElement) fileErrorElement.textContent = '';
                if (fileInfoElement) fileInfoElement.textContent = '';
                if (pathField) pathField.value = '';
            });
            
            // Clear debug info
            document.getElementById('uploadDebugInfo').innerHTML = 'Belum ada file yang diunggah';
        });
        
        // Back to login button
        document.getElementById('backToLoginButton').addEventListener('click', function() {
            document.getElementById('loginSection').classList.remove('hidden');
            document.getElementById('alreadyRegisteredSection').classList.add('hidden');
            document.getElementById('nisn').value = '';
            document.getElementById('password').value = '';
        });
        
        // Form validation
        function validateForm() {
            let isValid = true;
            
            // Check all required fields
            const requiredInputs = document.querySelectorAll('#daftarUlangForm [required]');
            requiredInputs.forEach(input => {
                if (input.type === 'file') {
                    if (!input.files || input.files.length === 0) {
                        const errorElement = document.getElementById(`${input.id}-error`);
                        errorElement.textContent = 'File wajib diunggah';
                        isValid = false;
                    }
                } else if (!input.value.trim()) {
                    input.classList.add('border-red-500');
                    isValid = false;
                } else {
                    input.classList.remove('border-red-500');
                }
            });
            
            // Check file sizes
            fileInputs.forEach(input => {
                if (input.files && input.files.length > 0) {
                    const file = input.files[0];
                    const maxSize = parseInt(input.getAttribute('data-max-size'));
                    
                    if (file.size > maxSize) {
                        const errorElement = document.getElementById(`${input.id}-error`);
                        const maxSizeMB = maxSize / (1024 * 1024);
                        const maxSizeKB = maxSize / 1024;
                        const sizeText = maxSize >= 1048576 ? `${maxSizeMB} MB` : `${maxSizeKB} KB`;
                        
                        errorElement.textContent = `Ukuran file terlalu besar. Maksimal ${sizeText}.`;
                        isValid = false;
                    }
                }
            });
            
            return isValid;
        }
        
        // Upload files one by one
        async function uploadFiles() {
            const fileInputs = document.querySelectorAll('input[type="file"]');
            const progressModal = document.getElementById('uploadProgressModal');
            const progressInfo = document.getElementById('uploadProgressInfo');
            const nisn = document.getElementById('form-nisn').value;
            
            progressModal.classList.remove('hidden');
            
            const uploadResults = {};
            let allUploadsSuccessful = true;
            
            for (let i = 0; i < fileInputs.length; i++) {
                const input = fileInputs[i];
                if (input.files && input.files.length > 0) {
                    const file = input.files[0];
                    const fileType = input.getAttribute('data-type');
                    const fileExtension = file.name.split('.').pop();
                    const newFileName = `${nisn}_${fileType}.${fileExtension}`;
                    
                    progressInfo.textContent = `Mengunggah ${i+1} dari ${fileInputs.length}: ${newFileName}`;
                    
                    try {
                        // Create FormData for this specific file
                        const formData = new FormData();
                        formData.append('file', file, newFileName);
                        formData.append('action', 'uploadFile');
                        formData.append('nisn', nisn);
                        formData.append('fileType', fileType);
                        
                        // Upload the file
                        const response = await fetch(SCRIPT_URL, {
                            method: 'POST',
                            body: formData
                        });
                        
                        const result = await response.json();
                        
                        if (result.success) {
                            // Store the file path returned from the server
                            uploadResults[input.name] = result.filePath;
                            
                            // Update the hidden path field
                            const pathField = document.getElementById(`${input.id}-path`);
                            if (pathField) {
                                pathField.value = result.filePath;
                            }
                        } else {
                            console.error(`Failed to upload ${newFileName}:`, result.error);
                            allUploadsSuccessful = false;
                        }
                    } catch (error) {
                        console.error(`Error uploading ${newFileName}:`, error);
                        allUploadsSuccessful = false;
                    }
                }
            }
            
            progressModal.classList.add('hidden');
            return { success: allUploadsSuccessful, paths: uploadResults };
        }
        
        // Form submission
        document.getElementById('daftarUlangForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            // Validate form
            if (!validateForm()) {
                return;
            }
            
            const submitButton = document.getElementById('submitButton');
            
            // Disable submit button and show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class="inline-block animate-spin rounded-full h-4 w-4 border-t-2 border-b-2 border-white mr-2"></span> Mengirim...';
            
            try {
                // First upload all files
                const uploadResult = await uploadFiles();
                
                if (!uploadResult.success) {
                    alert('Terjadi kesalahan saat mengunggah file. Silakan coba lagi.');
                    submitButton.disabled = false;
                    submitButton.innerHTML = 'Kirim Pendaftaran';
                    return;
                }
                
                // Now submit the form data with file paths
                const formData = new FormData(this);
                formData.append('action', 'submitForm');
                
                // Add file paths to form data
                for (const [key, value] of Object.entries(uploadResult.paths)) {
                    formData.append(`${key}-path`, value);
                }
                
                // Log form data for debugging
                console.log('Submitting form with the following data:');
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
                
                const response = await fetch(SCRIPT_URL, {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();
                console.log('Response data:', data);
                
                if (data.success) {
                    // Add the NISN to registered students list
                    const nisn = document.getElementById('form-nisn').value;
                    if (!registeredStudents.includes(nisn)) {
                        registeredStudents.push(nisn);
                    }
                    
                    // Show success modal
                    document.getElementById('successModal').classList.remove('hidden');
                } else {
                    alert('Terjadi kesalahan saat mengirim data. Silakan coba lagi.');
                    console.error('Error response:', data);
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim data. Silakan coba lagi.');
            } finally {
                // Reset button state
                submitButton.disabled = false;
                submitButton.innerHTML = 'Kirim Pendaftaran';
            }
        });
        
        // Close success modal
        document.getElementById('closeSuccessModal').addEventListener('click', function() {
            document.getElementById('successModal').classList.add('hidden');
            document.getElementById('loginSection').classList.remove('hidden');
            document.getElementById('registrationSection').classList.add('hidden');
            document.getElementById('nisn').value = '';
            document.getElementById('password').value = '';
            document.getElementById('form-tpt-lahir').value = '';
            
            // Clear file inputs
            fileInputs.forEach(input => {
                input.value = '';
                const fileNameElement = document.getElementById(`${input.id}-name`);
                const fileErrorElement = document.getElementById(`${input.id}-error`);
                const fileInfoElement = document.getElementById(`${input.id}-info`);
                const pathField = document.getElementById(`${input.id}-path`);
                if (fileNameElement) fileNameElement.textContent = '';
                if (fileErrorElement) fileErrorElement.textContent = '';
                if (fileInfoElement) fileInfoElement.textContent = '';
                if (pathField) pathField.value = '';
            });
            
            // Clear debug info
            document.getElementById('uploadDebugInfo').innerHTML = 'Belum ada file yang diunggah';
        });
        
        // Show loading indicator on page load
        document.getElementById('loginButton').disabled = true;
        document.getElementById('loadingIndicator').classList.remove('hidden');
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'950b29c923b2ea89',t:'MTc1MDA4NTg4NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

   <input type="hidden" id="dok-kk-path" name="dok-kk-path" value="">
   