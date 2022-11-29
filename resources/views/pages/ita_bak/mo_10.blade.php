<div class="accordion" id="accordionExample">
    {{-- copy --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                {{-- หัวข้อใหญ่ --}}
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    หน่วยงานมีแนวปฏิบัติการจัดการเรื่องร้องเรียน และช่องทางการร้องเรียน
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
                            1.มีคู่มือการดำเนินงานเรื่องร้องเรียนการปฏิบัติงานหรือการให้บริการของเจ้าหน้าที่ภายในหน่วยงาน ที่มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/2.pdf') }}"
                            target="_blank">
                            2.มีคู่มือปฏิบัติงานการรับเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ ที่มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/3.pdf') }}"
                            target="_blank">
                            3.มีหลักฐานที่แสดงถึงช่องทางการร้องเรียน อาทิ ผ่านระบบหมายเลขโทรศัพท์ ผ่านระบบอินเตอร์เน็ตผ่านระบบไปรษณีย์ ผ่าน Application หรือช่องทางอื่น ๆ ที่หน่วยงานกำหนดตามความเหมาะสม
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/4.pdf') }}"
                            target="_blank">
                            4.มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                    </ol>
                    {{-- ปิดหัวข้อย่อย --}}
                </ul>
            </div>
        </div>
    </div> {{-- copy --}}
</div>
