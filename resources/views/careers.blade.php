@php
    $bodyClass = 'bg-[#EAE2D2] antialiased font-manrope';
    $navbarTheme = '';
    $navDark = false;
    $navbarEntrance = false;
@endphp

@extends('layouts.app')

@section('content')
<div class="sections-wrapper relative overflow-x-clip">
    <main class="w-full">
        <!-- HERO SECTION -->
        <section class="relative w-full min-h-[90vh] md:min-h-screen flex items-center overflow-hidden pt-24 reveal bg-black">
            <div class="absolute inset-0 overflow-hidden">
                <video autoplay muted loop playsinline class="w-full h-full object-cover" src="{{ asset('assets/video/Career Footage.MOV') }}"></video>
            </div>
            <div class="absolute inset-0 bg-black/30 z-0"></div>
            <div class="relative z-10 w-full max-w-[1400px] mx-auto px-6 md:px-12 flex flex-col items-center md:items-start text-center md:text-left pt-12 md:pt-32 pb-24">
                <div class="flex items-center gap-4 mb-4 md:mb-6">
                    <div class="w-8 md:w-10 h-[1px] bg-[#D2BB9C]"></div>
                    <span class="font-manrope text-[9px] md:text-[10px] tracking-[0.3em] text-[#D2BB9C] uppercase font-semibold">Careers at ARKAN</span>
                </div>
                <h1 class="font-radley text-5xl md:text-7xl lg:text-[6rem] text-white leading-[1.05] tracking-tight mb-6 md:mb-8 font-normal">Build something<br/><span class="text-[#f5c68f] italic mr-4">that lasts.</span></h1>
                <p class="font-manrope text-xs md:text-sm text-white/90 max-w-lg leading-[1.8] mb-12 md:mb-16">Join the team reshaping Saudi Arabia's hospitality supply industry — and defining what it means on a global stage.</p>
                <div class="flex flex-col sm:flex-row gap-4 items-center">
                    <a href="#positions" class="px-8 py-3.5 bg-[#dbbc98] text-[#1B1B18] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold rounded-[2px] hover:bg-[#cfad81] transition-colors">VIEW OPEN POSITIONS</a>
                    <a href="{{ url('/about') }}" class="px-8 py-3.5 bg-white/10 backdrop-blur-sm border border-white/20 text-[#ffffff] font-manrope text-[10px] uppercase tracking-[0.2em] font-semibold rounded-[2px] hover:bg-white/20 transition-colors">ABOUT US</a>
                </div>
            </div>
        </section>

        <!-- WHY BUILD A CAREER SECTION -->
        <section class="w-full bg-[#EAE2D2] py-20 md:py-32 xl:py-40 reveal">
            <div class="max-w-[1400px] mx-auto px-6 md:px-12 xl:px-24">
                <div class="flex flex-col lg:flex-row gap-16 lg:gap-24">
                    <div class="w-full lg:w-5/12 flex flex-col">
                        <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold">Why Build A Career At Arkan</span>
                        <h2 class="font-radley text-5xl md:text-6xl lg:text-7xl text-[#4A433A] leading-[1.05] tracking-tight mb-10 md:mb-12">Where Saudi<br/><span class="text-[#C4A882] italic">ambition meets</span><br/>craft.</h2>
                        <div class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[1.9] space-y-6 max-w-md font-medium">
                            <p>ARKAN is not a company at the end of a story. We are at the beginning of one — building the team that will write it, at the intersection of luxury hospitality, precision manufacturing, and intelligent supply chain management.</p>
                            <div class="bg-[#FCFAF8] p-8 my-10 relative">
                                <div class="absolute left-0 top-0 bottom-0 w-[2px] bg-[#D2BB9C]"></div>
                                <p class="font-radley text-lg md:text-xl text-[#4A433A] leading-[1.5]">"This is the start of something significant.<br/><span class="italic text-[#8a8174]">If you have the drive, we have the canvas."</span></p>
                            </div>
                            <p>Our mission is ambitious and we cannot do it alone. We are looking for people who care about craft, think with precision, and want their work to leave a mark on the Kingdom — and the global hospitality industry it is redefining.</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-7/12 flex flex-col pt-8 lg:pt-24 lg:pl-12">
                        @php
                            $features = [
                                ['icon' => '1 Transformation.svg', 'title' => 'Drive Transformation', 'desc' => 'Join a national champion dedicated to showcasing Saudi Arabia\'s hospitality talent on the global stage. Every role here contributes to a legacy that extends far beyond any one project.'],
                                ['icon' => '2 Community.svg', 'title' => 'Be Part of a Creative Community', 'desc' => 'Thrive in an entrepreneurial culture where diverse experts share ideas, challenge conventions, and foster continuous development. We build together — openly and without hierarchy of thought.'],
                                ['icon' => '3 Legacy.svg', 'title' => 'Leave a Legacy', 'desc' => 'Make your mark in a fast-growing company with the freedom to innovate, lead, and own the outcomes of your work from the very first day.'],
                                ['icon' => '4 Grow.svg', 'title' => 'Grow Without Limits', 'desc' => 'We invest in our people — mentorship, real exposure, and opportunity. Whether specialist or generalist, ARKAN gives you the platform to grow into the career you are building toward.'],
                            ];
                        @endphp
                        @foreach($features as $index => $f)
                        <div class="flex gap-6 md:gap-8 pb-10 mb-10 border-b border-[#D2BB9C]/20 reveal reveal-delay-{{ ($index % 4) + 1 }}">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 border border-[#D2BB9C]/50 flex items-center justify-center text-[#4A433A] bg-[#FCFAF8]">
                                    <img src="{{ asset('assets/img/careers-icon/' . $f['icon']) }}" alt="{{ $f['title'] }}" class="w-6 h-6" />
                                </div>
                            </div>
                            <div>
                                <h3 class="font-radley text-2xl md:text-[28px] text-[#4A433A] mb-4">{{ $f['title'] }}</h3>
                                <p class="font-manrope text-[13px] text-[#8a8174] leading-[1.8] font-medium max-w-xl">{{ $f['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR CULTURE SECTION -->
        <section class="w-full bg-[#F2F0E9] py-20 md:py-32 xl:py-40 reveal">
            <div class="max-w-[1400px] mx-auto px-6 md:px-12 xl:px-24">
                <div class="mb-20 md:mb-28 max-w-3xl">
                    <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold block">Our Culture</span>
                    <h2 class="font-radley text-5xl md:text-6xl lg:text-[5.5rem] text-[#4A433A] leading-[1.05] tracking-tight">What you will find<br/><span class="text-[#C4A882] italic">when you join us.</span></h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[2px] bg-[#D2BB9C]">
                    @php
                        $culture = [
                            ['title' => 'Precision Over Volume', 'desc' => 'We move deliberately. Every decision, every product, every hire is made with intention. We do fewer things — and we do them exceptionally well.'],
                            ['title' => 'Ownership Mindset', 'desc' => 'At ARKAN, you are not a resource. You are a contributor. We give our people real responsibility and real recognition — from day one.'],
                            ['title' => 'Saudi Pride, Global Standard', 'desc' => 'Deeply rooted in the Kingdom, deeply connected to the world. We celebrate our Saudi identity while holding ourselves to the highest international benchmarks.'],
                        ];
                    @endphp
                    @foreach($culture as $index => $c)
                    <div class="group p-8 md:px-11 md:py-14 relative flex flex-col h-full bg-[#F2F0E9] hover:bg-[#F5EED8] transition-colors duration-500 reveal reveal-delay-{{ ($index % 3) + 1 }} cursor-default overflow-hidden">
                        <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-gradient-to-b from-transparent via-[#D2BB9C] to-transparent scale-y-0 origin-bottom transition-transform duration-500 group-hover:scale-y-100"></div>
                        <h3 class="font-radley text-2xl md:text-[28px] text-[#4A433A] mb-6">{{ $c['title'] }}</h3>
                        <p class="font-manrope text-[13.5px] md:text-[14px] text-[#8a8174] leading-[1.9] font-medium mt-auto">{{ $c['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- OPEN POSITIONS SECTION -->
        <section id="positions" class="w-full py-20 md:py-32 xl:py-40 reveal relative z-10" style="background: linear-gradient(180deg, #062040 0%, #0A3060 25%, #1460AA 60%, #2878C8 100%);">
            <div class="max-w-[1200px] mx-auto px-6 md:px-12">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 md:mb-24 gap-8">
                    <div>
                        <span class="font-manrope text-[10px] md:text-xs tracking-[0.3em] text-[#D2BB9C] uppercase mb-4 md:mb-6 font-semibold block">Open Positions</span>
                        <h2 class="font-radley text-5xl md:text-6xl text-white leading-[1.05] tracking-tight">Find your<br/><span class="text-[#D2BB9C] italic">place at ARKAN.</span></h2>
                    </div>
                    <div class="flex flex-col md:items-end gap-6">
                        <span class="font-manrope text-[11px] tracking-[0.1em] text-white/50">8 open roles</span>
                        <div class="flex flex-wrap gap-2" id="job-filters">
                            <button data-filter="all" class="filter-btn active px-5 py-2 rounded-sm border border-[#D2BB9C] bg-[#D2BB9C]/10 text-[#D2BB9C] font-manrope text-[10px] uppercase tracking-[0.2em] transition-colors hover:bg-[#D2BB9C]/20">ALL ROLES</button>
                            <button data-filter="design" class="filter-btn px-5 py-2 rounded-sm border border-white/20 text-white/70 font-manrope text-[10px] uppercase tracking-[0.2em] transition-colors hover:bg-white/10 hover:text-white">DESIGN</button>
                            <button data-filter="supply chain" class="filter-btn px-5 py-2 rounded-sm border border-white/20 text-white/70 font-manrope text-[10px] uppercase tracking-[0.2em] transition-colors hover:bg-white/10 hover:text-white">SUPPLY CHAIN</button>
                            <button data-filter="business" class="filter-btn px-5 py-2 rounded-sm border border-white/20 text-white/70 font-manrope text-[10px] uppercase tracking-[0.2em] transition-colors hover:bg-white/10 hover:text-white">BUSINESS</button>
                            <button data-filter="technology" class="filter-btn px-5 py-2 rounded-sm border border-white/20 text-white/70 font-manrope text-[10px] uppercase tracking-[0.2em] transition-colors hover:bg-white/10 hover:text-white">TECHNOLOGY</button>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-t border-white/10 job-list-container" id="job-list">
                    @php
                        $jobs = [
                            ['cat' => 'Design', 'cat_slug' => 'design', 'title' => 'Senior Product Designer', 'type' => 'Full-time', 'level' => 'Senior'],
                            ['cat' => 'Design', 'cat_slug' => 'design', 'title' => 'Hospitality Amenity Designer', 'type' => 'Full-time', 'level' => 'Mid-level'],
                            ['cat' => 'Supply Chain', 'cat_slug' => 'supply chain', 'title' => 'Head of Procurement & Sourcing', 'type' => 'Full-time', 'level' => 'Leadership'],
                            ['cat' => 'Supply Chain', 'cat_slug' => 'supply chain', 'title' => 'Logistics Coordinator', 'type' => 'Full-time', 'level' => 'Mid-level'],
                            ['cat' => 'Supply Chain', 'cat_slug' => 'supply chain', 'title' => 'Quality Assurance Manager', 'type' => 'Full-time', 'level' => 'Senior'],
                            ['cat' => 'Business Development', 'cat_slug' => 'business', 'title' => 'Senior Account Manager — Hospitality', 'type' => 'Full-time', 'level' => 'Senior'],
                            ['cat' => 'Technology', 'cat_slug' => 'technology', 'title' => 'Full Stack Developer — Platform', 'type' => 'Full-time', 'level' => 'Mid-level'],
                            ['cat' => 'Business', 'cat_slug' => 'business', 'title' => 'Project Manager — Pre-Opening Programs', 'type' => 'Full-time', 'level' => 'Mid-level'],
                        ];
                    @endphp
                    @foreach($jobs as $index => $j)
                    <a href="{{ url('/careers-detail') }}" data-category="{{ $j['cat_slug'] }}" class="job-item group flex flex-col md:flex-row md:items-center justify-between py-8 md:py-10 border-b border-white/10 hover:bg-white/5 transition-colors px-4 -mx-4 reveal reveal-delay-{{ ($index % 3) + 1 }}">
                        <div class="flex flex-col md:w-1/2 mb-4 md:mb-0">
                            <span class="font-manrope text-[9px] tracking-[0.25em] text-[#D2BB9C] uppercase mb-2">{{ $j['cat'] }}</span>
                            <h3 class="font-radley text-2xl md:text-[28px] text-white mb-3 group-hover:text-[#D2BB9C] transition-colors">@php echo str_replace('Designer', '<span class="italic">Designer</span>', str_replace('Manager', '<span class="italic">Manager</span>', str_replace('Developer', '<span class="italic">Developer</span>', str_replace('Procurement', '<span class="italic">Procurement</span>', $j['title'])))) @endphp</h3>
                            <div class="flex gap-2">
                                <span class="px-3 py-1 rounded-[2px] border border-white/20 text-white/70 font-manrope text-[9px] uppercase tracking-wider">{{ $j['type'] }}</span>
                                <span class="px-3 py-1 rounded-[2px] border border-white/20 text-white/70 font-manrope text-[9px] uppercase tracking-wider">{{ $j['level'] }}</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between md:justify-end md:w-1/2 gap-8 text-white/50 font-manrope text-xs">
                            <span>Riyadh, KSA</span>
                            <span class="group-hover:translate-x-2 group-hover:text-white transition-all duration-300">→</span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- JOIN THE TEAM SECTION -->
        <section class="w-full bg-[#EAE2D2] py-20 md:py-32 xl:py-40 reveal">
            <div class="max-w-[1400px] mx-auto px-6 md:px-12 xl:px-24">
                <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                    <div class="w-full lg:w-1/2 flex flex-col">
                        <span class="font-manrope text-[10px] md:text-xs tracking-[0.2em] text-[#8a8174] uppercase mb-6 md:mb-8 font-semibold">Join the Team</span>
                        <h2 class="font-radley text-5xl md:text-6xl text-[#4A433A] leading-[1.05] tracking-tight mb-8">Don't see your<br/>role? <span class="text-[#C4A882] italic">Write to us.</span></h2>
                        <p class="font-manrope text-[13px] text-[#8a8174] leading-[1.8] font-medium max-w-md mb-8">ARKAN is always on the lookout for exceptional people — even when there is no open listing that matches your profile exactly.<br/><br/><strong class="text-[#4A433A]">Send us your CV and tell us who you are.</strong> If there is a place for you at ARKAN, we will find it.</p>
                        
                        <form class="space-y-6 max-w-lg mt-4 reveal" onsubmit="event.preventDefault()">
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex flex-col w-full">
                                    <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">First Name</label>
                                    <input type="text" placeholder="John" class="w-full bg-[#FCFAF8] border border-[#D2BB9C]/30 px-4 py-3 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-sm focus:outline-none focus:border-[#C4A882] transition-colors rounded-sm" />
                                </div>
                                <div class="flex flex-col w-full">
                                    <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">Last Name</label>
                                    <input type="text" placeholder="Doe" class="w-full bg-[#FCFAF8] border border-[#D2BB9C]/30 px-4 py-3 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-sm focus:outline-none focus:border-[#C4A882] transition-colors rounded-sm" />
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">Email Address</label>
                                <input type="email" placeholder="your@email.com" class="w-full bg-[#FCFAF8] border border-[#D2BB9C]/30 px-4 py-3 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-sm focus:outline-none focus:border-[#C4A882] transition-colors rounded-sm" />
                            </div>
                            <div class="flex flex-col md:flex-row gap-6">
                                <div class="flex flex-col w-full">
                                    <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">Phone</label>
                                    <input type="tel" placeholder="+966 5X XXX XXXX" class="w-full bg-[#FCFAF8] border border-[#D2BB9C]/30 px-4 py-3 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-sm focus:outline-none focus:border-[#C4A882] transition-colors rounded-sm" />
                                </div>
                                <div class="flex flex-col w-full relative">
                                    <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">Area of Interest</label>
                                    <select class="w-full bg-[#FCFAF8] border border-[#D2BB9C]/30 px-4 py-3 text-[#4A433A] font-manrope text-sm focus:outline-none focus:border-[#C4A882] transition-colors rounded-sm appearance-none cursor-pointer">
                                        <option value="" disabled selected>Type department</option>
                                        <option value="design">Design</option>
                                        <option value="supply-chain">Supply Chain</option>
                                        <option value="business">Business</option>
                                        <option value="technology">Technology</option>
                                    </select>
                                    <div class="absolute right-4 bottom-4 pointer-events-none text-[#8a8174]">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">Cover Note</label>
                                <textarea rows="4" placeholder="Tell us briefly who you are and what you bring to ARKAN..." class="w-full bg-[#FCFAF8] border border-[#D2BB9C]/30 px-4 py-3 placeholder:text-[#8a8174]/40 text-[#4A433A] font-manrope text-sm focus:outline-none focus:border-[#C4A882] transition-colors rounded-sm resize-none"></textarea>
                            </div>
                            <div class="flex flex-col">
                                <label class="font-manrope text-[9px] uppercase tracking-[0.2em] text-[#8a8174] font-semibold mb-2">Upload CV (PDF or DOCX)</label>
                                <div class="w-full bg-[#FCFAF8] border border-dashed border-[#D2BB9C]/50 px-4 py-4 flex items-center justify-between text-[#8a8174]/60 font-manrope text-[11px] rounded-sm cursor-pointer hover:bg-white transition-colors relative">
                                    <span>Choose file or drag & drop</span>
                                    <span>↑</span>
                                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept=".pdf,.doc,.docx" />
                                </div>
                            </div>
                            <button type="submit" class="w-full py-4 bg-[#236b8e] hover:bg-[#1c5571] text-white font-manrope text-[9px] uppercase tracking-[0.2em] font-semibold transition-colors rounded-sm mt-4">SUBMIT APPLICATION</button>
                            <p class="text-[9px] text-[#8a8174]/60 text-center font-manrope">By submitting, you consent to ARKAN storing your information for recruitment purposes.</p>
                        </form>
                    </div>
                    <div class="w-full lg:w-1/2 flex justify-center lg:justify-end reveal reveal-delay-3">
                        <div class="w-full max-w-[500px] aspect-[4/5] relative bg-gradient-to-br from-[#0A3060] to-[#1460AA] flex items-end p-8 overflow-hidden shadow-xl">
                            <div class="absolute inset-0 flex items-center justify-center opacity-10">
                                <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                            </div>
                            <div class="relative z-10 w-full">
                                <p class="font-radley text-white text-xl italic mb-3">"Join the start of something big."</p>
                                <p class="font-manrope text-white/50 text-[10px] tracking-wider uppercase flex items-center gap-2">ARKAN <span class="w-2 h-[1px] bg-white/30"></span> Riyadh, Saudi Arabia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QUESTIONS SECTION -->
        <section class="w-full bg-[#F2F0E9] py-24 md:py-32 xl:py-40 reveal text-center border-t border-[#D2BB9C]/20 relative">
            <div class="max-w-2xl mx-auto px-6">
                <div class="absolute top-12 left-1/2 -translate-x-1/2 text-[#D2BB9C]/50 text-xl font-light">+</div>
                <h2 class="font-radley text-5xl md:text-6xl text-[#4A433A] leading-[1.1] tracking-tight mb-16">Questions?<br/>We'd <span class="text-[#C4A882] italic">love to hear</span> from<br/>you.</h2>
                <div class="w-[1px] h-8 bg-[#D2BB9C]/40 mx-auto mb-16"></div>
                <p class="font-manrope text-[11px] md:text-xs text-[#8a8174] leading-[1.8] font-medium mb-6">For general career enquiries, reach out directly. We read every message.</p>
                <a href="mailto:careers@arkan365.com" class="inline-block font-radley italic text-[#C4A882] hover:text-[#4A433A] text-lg transition-colors border-b border-[#C4A882]/30 hover:border-[#4A433A] pb-1">careers@arkan365.com</a>
            </div>
        </section>
    </main>
</div>
@endsection

@push('scripts')
<script>
    history.scrollRestoration = "manual";
    window.scrollTo(0, 0);

    document.addEventListener('DOMContentLoaded', () => {
        // Job filter logic using global styles if possible, otherwise localized
        const filterBtns = document.querySelectorAll('.filter-btn');
        const jobItems = document.querySelectorAll('.job-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.dataset.filter;
                
                filterBtns.forEach(b => b.classList.remove('active', 'bg-[#D2BB9C]/10', 'text-[#D2BB9C]'));
                filterBtns.forEach(b => {
                    if (b !== btn) {
                        b.classList.add('border-white/20', 'text-white/70');
                    }
                });
                
                btn.classList.add('active', 'bg-[#D2BB9C]/10', 'text-[#D2BB9C]');
                btn.classList.remove('border-white/20', 'text-white/70');

                jobItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'flex';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    });
</script>
@endpush
