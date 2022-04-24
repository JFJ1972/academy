@extends('layouts.app')

@section('content')
    <div class="main p-5 h-fit flex flex-col gap-5 lg:flex-row pb-32">
        <div class="w-full bg-white p-6 rounded-lg lg:w-5/12">
            <h2 class="font-bold text-2xl">Data User</h2>

            <div class="user shadow-xl p-3 rounded-lg flex flex-wrap items-center space-x-3 hover:scale-95">
                <div class="avatar">
                    <div class="w-28 rounded">
                        <img src="https://api.lorem.space/image/face?hash=92048" />
                    </div>
                </div>
                <div class="data-user flex flex-col">
                    <label class="text-sm text-slate-600" for="">Username:</label>
                    <span class="font-bold text-lg">{{ auth()->user()->name }}</span>
                    <label class="text-sm text-slate-600" for="">Email:</label>
                    <span class="font-base text-lg">{{ auth()->user()->email }}</span>
                    <label class="text-sm text-slate-600" for="">Creation Date:</label>
                    <span class="font-base text-lg">{{ auth()->user()->created_at }}</span>
                </div>
            </div>
            <div class="buttons flex flex-wrap justify-center flex-row lg:flex-col gap-3">
                <label for="my-modal-5" class="btn text-lg text-white bg-blue-600 hover:bg-blue-500 normal-case modal-button border-0">Add New User</label>
                <a href="" class=" btn text-lg text-white bg-teal-600 hover:bg-teal-500 normal-case border-0">Update Users</a>
                <a href="" class=" btn text-lg text-white bg-red-600 hover:bg-red-800 normal-case border-0">Delete User</a>
            </div>
        </div>

        <!-- Put this part before </body> tag -->
        <input type="checkbox" id="my-modal-5" class="modal-toggle">
        <div class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <div class="top flex items-center justify-between">
                <h3 class="font-bold text-lg">Add new user</h3>
                <div class="modal-action">
                    <label for="my-modal-5" class="btn bg-red-500 text-xl text-white hover:bg-red-400 border-0">&times;</label>
                </div>
            </div>
            <x-form />
        </div>
        </div>

        <div class="w-full flex flex-col justify-start">
            <div class="w-full bg-white p-6 rounded-lg">
                <h2 class="font-bold text-2xl">Stadistics</h2>
                <div class="flex items-center justify-around py-3">
                    <div class="data bg-purple-600 text-white rounded-sm flex flex-col justify-center items-center p-3 hover:scale-110">
                        <span class="text-2xl font-semibold">Total Users:</span>
                        <span class="text-3xl font-bold">10</span>
                    </div>
                    <div class="data bg-blue-600 text-white rounded-sm flex flex-col justify-center items-center p-3 hover:scale-110">
                        <span class="text-2xl font-semibold">Total Posts:</span>
                        <span class="text-3xl font-bold">100</span>
                    </div>
                    <div class="data bg-teal-600 text-white rounded-sm flex flex-col justify-center items-center p-3 hover:scale-110">
                        <span class="text-2xl font-semibold">Total Visits:</span>
                        <span class="text-3xl font-bold">1000</span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white p-6 rounded-lg">
                Graphic
            </div>
        </div>
    </div>
@endsection