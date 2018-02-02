<?php

namespace App\Providers;

use Clocking\Helpers\BidCode;
use Clocking\Helpers\Interfaces\IBidCode;
use Clocking\Repositories\AttendanceRepo;
use Clocking\Repositories\BeneficiaryRepo;
use Clocking\Repositories\BidSetRepo;
use Clocking\Repositories\BranchRepo;
use Clocking\Repositories\DeviceRepo;
use Clocking\Repositories\FingerprintRepo;
use Clocking\Repositories\Interfaces\IAttendanceRepo;
use Clocking\Repositories\Interfaces\IBeneficiaryRepo;
use Clocking\Repositories\Interfaces\IBidSetRepo;
use Clocking\Repositories\Interfaces\IBranchRepo;
use Clocking\Repositories\Interfaces\IDeviceRepo;
use Clocking\Repositories\Interfaces\IFingerprintRepo;
use Clocking\Repositories\Interfaces\IPictureRepo;
use Clocking\Repositories\Interfaces\IPolicyRepo;
use Clocking\Repositories\Interfaces\IRoleRepo;
use Clocking\Repositories\Interfaces\IUserRepo;
use Clocking\Repositories\PictureRepo;
use Clocking\Repositories\PolicyRepo;
use Clocking\Repositories\RoleRepo;
use Clocking\Repositories\UserRepo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IPolicyRepo::class, PolicyRepo::class);
        $this->app->bind(IRoleRepo::class, RoleRepo::class);
        $this->app->bind(IUserRepo::class, UserRepo::class);
        $this->app->bind(IFingerprintRepo::class, FingerprintRepo::class);
        $this->app->bind(IPictureRepo::class, PictureRepo::class);
        $this->app->bind(IBeneficiaryRepo::class, BeneficiaryRepo::class);
        $this->app->bind(IBidSetRepo::class, BidSetRepo::class);
        $this->app->bind(IBidCode::class, BidCode::class);
        $this->app->bind(IBranchRepo::class, BranchRepo::class);
        $this->app->bind(IDeviceRepo::class, DeviceRepo::class);
        $this->app->bind(IAttendanceRepo::class, AttendanceRepo::class);
    }
}
