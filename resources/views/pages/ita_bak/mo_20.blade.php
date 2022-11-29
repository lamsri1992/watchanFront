<div class="accordion" id="accordionExample">
    {{-- copy --}}
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                {{-- หัวข้อใหญ่ --}}
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ไตรมาสที่ 2 หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน : กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2565
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
                            1. มีบันทึกข้อความรับทราบการรายงานรายงานการเรี่ยไรและการให้หรือรับของขวัญหรือประโยชน์อื่นใด และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/2.pdf') }}"
                            target="_blank">
                            2. มีรายงานการเรี่ยไรและการให้หรือรับของขวัญหรือประโยชน์อื่นใด ที่ได้จากระบบ MSRS (แนบตามข้อ 1.)
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/3.pdf') }}"
                            target="_blank">
                            3. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    {{-- ปิดหัวข้อย่อย --}}
                </ul>
            </div>
        </div>
    </div>
    {{-- <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ไตรมาสที่ 4
                    <br>
                    หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน :
                    กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2565
                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <ul>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            1. มีบันทึกข้อความรับทราบการรายงานรายงานการเรี่ยไรและการให้หรือรับของขวัญหรือประโยชน์อื่นใด
                            และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                        </a>
                    </ol>
                    <ol>
                        <a href="{{ asset('files/ita/2565/moit'.request('id').'/1.pdf') }}"
                            target="_blank">
                            2. มีรายงานการเรี่ยไรและการให้หรือรับของขวัญหรือประโยชน์อื่นใด ที่ได้จากระบบ MSRS (แนบตามข้อ 1.)
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
    </div> --}}
</div>
