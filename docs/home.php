

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Kaminata</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <!-- start container -->
    <div class="container flex  w-full h-screen max-w-full" id="main">
        <!-- start sidebar -->
        <div class="bg-secondary basis-1/4">
            <!-- start logo -->
            <div class="flex justify-around h-32 items-center ">
                <img src="../asset/img/logo1.png" alt="CompanyLogo" class="w-1/2 h-1/2">
            </div>
            <!-- finish logo -->
            <!-- start menu -->
            <div class="divide-y divide-slate-200">
                <a href="home.html" class="font-poppins block w-full">
                    <div class="flex items-center border-t border-slate-200 cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="h-6 w-6 mx-3 my-2">
                            <path fill="currentColor" d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z" />
                        </svg>
                        <h1>Home</h1>
                    </div>
                </a>
                <a href="master.html" class="font-poppins block w-full">
                    <div class="flex items-center cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="h-6 w-6 mx-3 my-2 ">
                            <path fill="currentColor" d="M21 3H3V9H21V3M19 7H5V5H19V7M14.5 11C14.78 11 15 11.22 15 11.5V13H9V11.5C9 11.22 9.22 11 9.5 11H14.5M18 13.09V10H20V13.09C19.67 13.04 19.34 13 19 13C18.66 13 18.33 13.04 18 13.09M13 19C13 19.7 13.13 20.37 13.35 21H4V10H6V19H13M22.5 17.25L17.75 22L15 19L16.16 17.84L17.75 19.43L21.34 15.84L22.5 17.25Z" />
                        </svg>
                        <h1>Master Barang</h1>
                    </div>
                </a>
                <a href="client.html" class="font-poppins block w-full">
                    <div class="flex items-center cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="h-6 w-6 mx-3 my-2">
                            <path fill="currentColor" d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" />
                        </svg>
                        <h1>Client</h1>
                    </div>
                </a>
                <a href="pendapatan.html" class="font-poppins block w-full">
                    <div class="flex items-center cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="h-6 w-6 mx-3 my-2">
                            <path fill="currentColor" d="M6,16.5L3,19.44V11H6M11,14.66L9.43,13.32L8,14.64V7H11M16,13L13,16V3H16M18.81,12.81L17,11H22V16L20.21,14.21L13,21.36L9.53,18.34L5.75,22H3L9.47,15.66L13,18.64" />
                        </svg>
                        <h1>Pendapatan</h1>
                    </div>
                </a>
                <a href="statement.html" class="font-poppins block w-full">
                    <div class="flex items-center cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="h-6 w-6 mx-3 my-2 ">
                            <path fill="currentColor" d="M17,4V10L15,8L13,10V4H9V20H19V4H17M3,7V5H5V4C5,2.89 5.9,2 7,2H19C20.05,2 21,2.95 21,4V20C21,21.05 20.05,22 19,22H7C5.95,22 5,21.05 5,20V19H3V17H5V13H3V11H5V7H3M5,5V7H7V5H5M5,19H7V17H5V19M5,13H7V11H5V13Z" />
                        </svg>
                        <h1>E-Statement</h1>
                    </div>
                </a>
                <a href="simulasi.html" class="font-poppins block w-full">
                    <div class="flex items-center cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24"  class="h-6 w-6 mx-3 my-2">
                            <path fill="currentColor" d="M15 3H5A2 2 0 0 0 3 5V19A2 2 0 0 0 5 21H19A2 2 0 0 0 21 19V9L15 3M19 19H5V5H14V10H19M17 14H7V12H17M14 17H7V15H14" />
                        </svg>
                        <h1>Form Simulasi</h1>
                    </div>
                </a>
                <a href="invoice.html" class="font-poppins block w-full">
                    <div class="flex items-center cursor-pointer text-white hover:bg-primary hover:text-black hover:font-extrabold transition duration-150 border-b">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="h-6 w-6 mx-3 my-2">
                            <path fill="currentColor" d="M19.5 3.5L18 2L16.5 3.5L15 2L13.5 3.5L12 2L10.5 3.5L9 2L7.5 3.5L6 2L4.5 3.5L3 2V22L4.5 20.5L6 22L7.5 20.5L9 22L10.5 20.5L12 22L13.5 20.5L15 22L16.5 20.5L18 22L19.5 20.5L21 22V2L19.5 3.5M19 19.09H5V4.91H19V19.09M6 15H18V17H6M6 11H18V13H6M6 7H18V9H6Z" />
                        </svg>
                        <h1>Invoice</h1>
                    </div>
                </a>
            </div>
            <!-- finish menu -->
        </div>
        <!-- finish side bar -->
        <!-- start main -->
        <div class="bg-primary grow relative">
            <!-- start header -->
            <header class="flex items-center mx-12 mt-3 justify-between ">
                <div class="flex">
                    <img src="../asset/img/logo.png" alt="logo" class="h-16">
                    <h1 class="text-5xl font-poppins self-center font-bold">Kaminata Tools</h1>
                </div>
                <div>
                    <img src="../asset/img/profil.png" alt="profile" class="w-24 h-1/6 cursor-pointer" id="profile">
                    <!-- start profile click -->
                    <div class="bg-[#D9D9D9] py-5 pr-7 absolute right-12 font-poppins rounded-xl hidden " id="profile-click">
                        <div class="mx-3">
                            <h1 class="font-bold">Alvin Azalia</h1>
                            <h2>Interior Design</h2>
                        </div>
                        <hr width="120%" class="my-3">
                        <div class="flex">
                            <?xml version="1.0" ?><svg class="w-10 p-2 cursor-pointer" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><g id="user"><ellipse cx="12" cy="8" rx="5" ry="6"/><path d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9    C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z"/></g></g></svg>
                            <a href="" class="block self-center"><h1 class="font-bold">Profile</h1></a>
                        </div>
                        <div class="flex">
                            <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg class="w-10 p-2 cursor-pointer" enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M478.8,512H33.2c-5.8,0-10.5-4.7-10.5-10.5V209.1c0-5.8,4.7-10.5,10.5-10.5h445.6c5.8,0,10.5,4.7,10.5,10.5   v292.4C489.3,507.3,484.6,512,478.8,512z M43.8,490.9h424.5V219.6H43.8V490.9z" fill="#000"/><path d="M443.6,208.7c-5.8,0-10.5-4.7-10.5-10.5c0-97.6-79.4-177.1-177.1-177.1S78.9,100.5,78.9,198.2   c0,5.8-4.7,10.5-10.5,10.5s-10.5-4.7-10.5-10.5C57.8,88.9,146.7,0,256,0s198.2,88.9,198.2,198.2C454.2,204,449.4,208.7,443.6,208.7   z" fill="#000"/><path d="M256,437c-5.8,0-10.5-4.7-10.5-10.5v-61.8c0-5.8,4.7-10.5,10.5-10.5c5.8,0,10.5,4.7,10.5,10.5v61.8   C266.5,432.2,261.8,437,256,437z" fill="#000"/><path d="M256,369.7c-26.5,0-48.1-21.6-48.1-48.1c0-26.5,21.6-48.1,48.1-48.1s48.1,21.6,48.1,48.1   C304.1,348.2,282.5,369.7,256,369.7z M256,294.7c-14.9,0-27,12.1-27,27s12.1,27,27,27s27-12.1,27-27S270.9,294.7,256,294.7z" fill="#6A6E7C"/></g></svg>
                            <a href="" class="block self-center"><h1 class="self-center font-bold">Ganti Password</h1></a>
                        </div>
                        <div class="flex cursor-pointer logout">
                            <svg viewBox="0 0 24 24" class="w-10 p-2 cursor-pointer">
                                <path fill="currentColor" d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z" />
                            </svg>
                            <h1 class="self-center font-bold">Keluar</h1>
                        </div>
                    </div>
                </div>
                <!-- finish profile click -->
            </header>
            <h1 class="mx-12 text-3xl my-5 font-bold font-poppins">Hi <span class="text-[#FF2C2C]">Angga</span> Selamat Datang</h1>
            <!-- finish header -->
            <!-- start box -->
            <div class="grid grid-cols-3 mx-12 gap-x-11 gap-y-6 font-poppins">
                <a href="home.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">Home</div></a>
                <a href="master.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">Master Barang</div></a>
                <a href="client.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">Client</div></a>
                <a href="pendapatan.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">Pendapatan</div></a>
                <a href="statement.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">E-Statement</div></a>
                <a href="simulasi.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">Form Simulasi</div></a>
                <a href="invoice.html"><div class="bg-white h-28 flex items-center justify-center border border-black hover:border-blue-300">Invoice</div></a>
                <!-- start logout button -->
                <div class="bg-[#F0F0F0] h-28 flex col-start-3 justify-end flex-col cursor-pointer logout">
                        <svg viewBox="0 0 24 24" class="w-1/6 h-1/2 self-end">
                            <path fill="currentColor" d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z" />
                        </svg>
                        <h1 class="self-end font-poppins font-bold">Logout</h1>
                    </a>
                </div>
                <!-- finish logout button -->
            </div>
            <!-- finish box -->
        </div>
        <!-- finish main -->
    </div>
    <!-- start logout confirm -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white outline outline-1 outline-gray-400 rounded-xl hidden flex-col items-center px-7 py-4 shadow-lg z-50" id="confirm">
        <svg viewBox="0 0 24 24" class=" h-28 text-red-600">
            <path fill="currentColor" d="M10 3H14V14H10V3M10 21V17H14V21H10Z" />
        </svg>
        <h1 class="text-3xl font-bold mb-3">Are You Sure?</h1>
        <div class=" w-full flex justify-around">
            <button class="bg-slate-100 hover:bg-slate-200 py-0.5 px-5 rounded-sm" id="cancel">Cancel</button>
            <a href="index.html">
                <button class="bg-secondary hover:bg-[#060505] text-white py-0.5 px-5 rounded-sm">Yes</button>
            </a>
        </div>
    </div>
    <!-- finish logout confirm -->
    <!-- start change password -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white outline outline-1 outline-gray-400 rounded-xl flex-col items-center px-4 py-4 shadow-lg z-50 font-poppins">
        <!-- form change password -->
        <form action="">
            <table>
                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="cursor-pointer">
                    <path fill="currentColor" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" />
                </svg>
                <h1 class="font-bold text-xl mb-4 mt-4">Reset Password</h1>
                <div class="flex flex-col mb-3">
                    <label for="" class="text-xs text-gray-300">Current Password</label>
                    <input type="password" class="border-b-2 outline-none">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="" class="text-xs text-gray-300">New Password</label>
                    <input type="password" class="border-b-2 outline-none">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="" class="text-xs text-gray-300">Confirm New Password</label>
                    <input type="password" class="border-b-2 outline-none">
                </div>
                <button type="submit" class="text-white bg-secondary w-full rounded-sm hover:scale-105">Submit</button>
            </table>
        </form>
    </div>
    <!-- finish change password -->
<script src="script.js"></script>
</body>
</html>