<div class="grid grid-cols-12 gap-x-6">
    <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
        <div class="box overflow-hidden">
            <div class="box-body !p-0">
                <div class="sm:flex items-start p-6  main-profile-cover">
                    <div>
                        <span class="avatar avatar-xxl avatar-rounded online me-4">
                            <img src="/assets/images/faces/9.jpg" alt="">
                        </span>
                    </div>
                    <div class="flex-grow main-profile-info">
                        <div class="flex items-center !justify-between -mb-3">
                            <h6 class="font-semibold mb-1 text-white text-[1rem]">
                                {{ $agent->user->nom }}{{ ' ' }}{{ $agent->user->prenom }}
                            </h6>
                            <button type="button" class="ti-btn ti-btn-light !font-medium !gap-0"><i
                                    class="ri-add-line me-1 align-middle inline-block"></i>{{ $agent->user->statut }}</button>
                        </div>
                        <p class="mb-1 !text-white  opacity-[0.7]">Nom d'utilisateur: {{ $agent->user->username }}</p>
                        <div class="flex mb-0">
                            <div class="me-6">
                                @foreach ($agent->user->getRoleNames() as $role)
                                    <p class="font-bold text-[1.25rem] text-white text-shadow mb-0 capitalize">
                                        {{ $role }}</p>
                                @endforeach

                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">{{ __('Role') }}</p>
                            </div>
                            <div class="me-6">
                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0 capitalize">
                                    {{ $agent->user->statut }}</p>
                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">{{ __('Statut') }}</p>
                            </div>
                            <div class="me-6">
                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">128</p>
                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Following</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                    <div class="text-[#8c9097] dark:text-white/50">
                        <p class="mb-2">
                            <span
                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i
                                    class="ri-mail-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $agent->user->email }}
                        </p>
                        <p class="mb-2">
                            <span
                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i
                                    class="ri-phone-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $agent->user->tel }}
                        </p>
                        <p class="mb-0">
                            <span
                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-[#8c9097] dark:text-white/50">
                                <i
                                    class="ri-map-pin-line align-middle text-[.875rem] text-[#8c9097] dark:text-white/50"></i>
                            </span>
                            {{ $agent->user->adresse }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="xxl:col-span-8 xl:col-span-12 col-span-12">
        <div class="grid grid-cols-12 gap-x-6">
            <div class="xl:col-span-12 col-span-12">
                <div class="box">
                    <div class="box-body !p-0">
                        <div
                            class="!p-4 border-b dark:border-defaultborder/10 border-dashed md:flex items-center justify-between">
                            <nav class="-mb-0.5 sm:flex md:space-x-6 rtl:space-x-reverse pb-2">
                                <a class="w-full sm:w-auto flex active hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md py-2 px-4 text-primary text-sm"
                                    href="javascript:void(0);" id="activity-tab" data-hs-tab="#activity-tab-pane"
                                    aria-controls="activity-tab-pane">
                                    <i
                                        class="ri-gift-line  align-middle inline-block me-1"></i>{{ __('Profil Agent') }}
                                </a>
                                <a class="w-full sm:w-auto flex hs-tab-active:font-semibold  hs-tab-active:text-white hs-tab-active:bg-primary rounded-md  py-2 px-4 text-primary text-sm"
                                    href="javascript:void(0);" id="posts-tab" data-hs-tab="#posts-tab-pane"
                                    aria-controls="posts-tab-pane">
                                    <i
                                        class="ri-bill-line me-1 align-middle inline-block"></i>{{ __('Dernières visites') }}
                                </a>
                            </nav>
                        </div>
                        <div class="!p-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active fade !p-0 !border-0" id="activity-tab-pane"
                                    role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                    <ul class="list-none profile-timeline">
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary/10  !text-primary avatar-rounded profile-timeline-avatar">
                                                    F
                                                </span>
                                                <p class="mb-2">
                                                    <span>Fonction : </span>
                                                </p>
                                                <span class="badge bg-success/10 text-success uppercase">
                                                    {{ $agent->fonction }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary/10  !text-primary avatar-rounded profile-timeline-avatar">
                                                    S
                                                </span>
                                                <p class="mb-2">
                                                    <span>Service : </span>
                                                </p>
                                                <span class="badge bg-success/10 text-success uppercase">
                                                    {{ $agent->service }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary/10  !text-primary avatar-rounded profile-timeline-avatar">
                                                    DOB
                                                </span>
                                                <p class="mb-2">
                                                    <span>Date de Naissance : </span>
                                                </p>
                                                <span class="badge bg-success/10 text-success uppercase">
                                                    {{ $agent->dateAniv }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary/10  !text-primary avatar-rounded profile-timeline-avatar">
                                                    DOH
                                                </span>
                                                <p class="mb-2">
                                                    <span>Date d'embauche : </span>
                                                </p>
                                                <span class="badge bg-success/10 text-success uppercase">
                                                    {{ $agent->dateEmbauche }}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary/10  !text-primary avatar-rounded profile-timeline-avatar">
                                                    ST
                                                </span>
                                                <p class="mb-2">
                                                    <span>Statut : </span>
                                                </p>
                                                <span class="badge bg-danger/10 text-danger uppercase">
                                                    {{ $agent->statut }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade !p-0 !border-0 hidden !rounded-md" id="posts-tab-pane"
                                    role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
                                    <div class="table-responsive">
                                        <table
                                            class="table whitespace-nowrap ti-striped-table table-hover min-w-full ti-custom-table-hover">
                                            <thead>
                                                <tr class="border-b border-defaultborder ">
                                                    <th scope="col" class="text-start">Invoice</th>
                                                    <th scope="col" class="text-start">Customer</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                    <th scope="col" class="text-start">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-defaultborder ">
                                                    <th scope="row">IN-2032</th>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="/assets/images/faces/15.jpg" alt="img">
                                                            </div>
                                                            <div>
                                                                <div class="leading-none">
                                                                    <span>Mark Cruise</span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span
                                                                        class="text-[0.6875rem] text-[#8c9097] dark:text-white/50">markcruise24@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success/10 text-success"><i
                                                                class="ri-check-fill align-middle me-1"></i>Paid</span>
                                                    </td>
                                                    <td>Jul 26,2022</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder ">
                                                    <th scope="row">IN-2022</th>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="/assets/images/faces/12.jpg" alt="img">
                                                            </div>
                                                            <div>
                                                                <div class="leading-none">
                                                                    <span>Charanjeep</span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span
                                                                        class="text-[0.6875rem] text-[#8c9097] dark:text-white/50">charanjeep@gmail.in</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success/10 text-success"><i
                                                                class="ri-check-fill align-middle me-1"></i>Paid</span>
                                                    </td>
                                                    <td>Mar 14,2022</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder ">
                                                    <th scope="row">IN-2014</th>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="/assets/images/faces/5.jpg" alt="img">
                                                            </div>
                                                            <div>
                                                                <div class="leading-none">
                                                                    <span>Samantha Julie</span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span
                                                                        class="text-[0.6875rem] text-[#8c9097] dark:text-white/50">julie453@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-danger/10 text-danger"><i
                                                                class="ri-close-fill align-middle me-1"></i>Cancelled</span>
                                                    </td>
                                                    <td>Feb 1,2022</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder ">
                                                    <th scope="row">IN-2036</th>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="/assets/images/faces/11.jpg" alt="img">
                                                            </div>
                                                            <div>
                                                                <div class="leading-none">
                                                                    <span>Simon Cohen</span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span
                                                                        class="text-[0.6875rem] text-[#8c9097] dark:text-white/50">simon@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-light text-black dark:text-white"><i
                                                                class="ri-reply-line align-middle me-1"></i>Refunded</span>
                                                    </td>
                                                    <td>Apr 24,2022</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder ">
                                                    <th scope="row">IN-2036</th>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="avatar avatar-sm me-2 avatar-rounded">
                                                                <img src="/assets/images/faces/11.jpg" alt="img">
                                                            </div>
                                                            <div>
                                                                <div class="leading-none">
                                                                    <span>Simon Cohen</span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span
                                                                        class="text-[0.6875rem] text-[#8c9097] dark:text-white/50">simon@gmail.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-light text-black dark:text-white"><i
                                                                class="ri-reply-line align-middle me-1"></i>Refunded</span>
                                                    </td>
                                                    <td>Apr 24,2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
