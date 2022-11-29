<div class="accordion" id="accordionExample">
    {{-- copy --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                {{-- หัวข้อใหญ่ --}}
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ไตรมาสที่ 2
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
                            1. มีบันทึกข้อความรายงานผลการดำเนินงานเกี่ยวกับเรื่องร้องเรียนให้ผู้ร้องเรียนทราบ ภายใน 15 วัน มีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน จำนวน 1 ชุด รอบ 6 เดือน (1 ตุลาคม 2564 – 30 มีนาคม 2565)
                        </a>
                    </ol>
                    <ol>

                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/2.pdf') }}"
                            target="_blank">
                            2. มีบันทึกข้อความรายงานสรุปผลการดำเนินงานเรื่องร้องเรียนที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข เสนอผู้บริหารเพื่อรับทราบ มีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                </ul>
            </div>
        </div>
    </div>
    {{-- copy --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                {{-- หัวข้อใหญ่ --}}
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    3. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียน รอบ 6 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 2.) รอบ 6 เดือน (1 ตุลาคม 2564 – 30 มีนาคม 2565)
                    <br>

                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <ul>
                    {{-- หัวข้อย่อย --}}
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/3_1.pdf') }}"
                            target="_blank">
                            3.1 สรุปผลการดำเนินงานเรื่องร้องเรียนการปฏิบัติงานหรือการให้บริการของเจ้าหน้าที่ภายในหน่วยงาน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/3_2.pdf') }}"
                            target="_blank">
                            3.2 สรุปผลการดำเนินงานเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ
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
    </div>
</div>
