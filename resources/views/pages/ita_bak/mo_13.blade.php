<div class="accordion" id="accordionExample">
    {{-- copy --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                {{-- หัวข้อใหญ่ --}}
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ไตรมาสที่ 2 หรือไตรมาสที่ 3
                    <br>

                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <ul>
                    {{-- หัวข้อย่อย --}}
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            1. มีบันทึกข้อความลงนามคำสั่ง ประกาศ หรือข้อสั่งการ และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    <ol>

                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/2.pdf') }}"
                            target="_blank">
                            2. มีคำสั่ง ประกาศ หรือข้อสั่งการ มาตรการการป้องกันการรับสินบนทุกรูปแบบตามข้อมูลประกอบข้อคำถาม ประเด็นข้อ 1. ถึงข้อ 6. ตามที่หน่วยงานกำหนดที่มีการกำหนดกลไกการกำกับติดตาม
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/3.pdf') }}"
                            target="_blank">
                            3. มีหลักฐานหนังสือแจ้งเวียน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/4.pdf') }}"
                            target="_blank">
                            4. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                </ul>
            </div>
        </div>
    </div> {{-- copy --}}
    {{-- <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ไตรมาสที่ 4
                    <br>

                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <ul>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            1. มีบันทึกข้อความรับทราบ และรายงานสรุปผลการกำกับติดตาม ประกาศมาตรการ
                            การป้องกันการรับสินบนทุกรูปแบบ ตามข้อมูลประกอบข้อคำถาม ประเด็นข้อ 1. ถึงข้อ 6.
                            ตามที่หน่วยงานกำหนด
                        </a>
                    </ol>
                    <ol>

                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            2. มีรายงานสรุปผลการกำกับติดตาม ประกาศมาตรการการป้องกันการรับสินบน ทุกรูปแบบ ประเด็นข้อ 1.
                            ถึงข้อ 6. (แนบตามข้อ 1.)
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            3. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
