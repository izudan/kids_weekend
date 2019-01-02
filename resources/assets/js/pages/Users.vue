<template>
<main>
    <div class="section">
        <div class="container container-expand">
            <div class="columns edit-wrapper">
                <div class="column is-one-quarter">
                    <div class="side-menu">
                        <div class="side-nav">
                            <ul>
                                <li class="side-nav-item">
                                    <a>
                                        <strong class="side-nav-item-title">プロフィールを編集</strong>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-item-title">
                                        写真
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="side-nav-item-title">
                                        信頼＆認証確認
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a class="button btn-profile">プロフィールを見る</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="main-edit">
                        <div>
                            <div class="profile-required">
                                <div class="card">
                                  <header class="card-header">
                                    <p class="card-header-title">
                                        必須項目
                                    </p>
                                </header>
                                  <div class="card-content">
                                    <div class="content">
                                        <div class="field-body">
                                            <div class="field">
                                              <label class="label">姓</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="姓" value="田中">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-user"></i>
                                                </span>
                                              </div>
                                            </div>                                            
                                            <div class="field">
                                              <label class="label">名</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="名" value="又暉">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-user"></i>
                                                </span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                          <label class="label">メールアドレス</label>
                                          <div class="control has-icons-left">
                                            <input class="input" type="email" placeholder="メールアドレス" value="admin@example.com">
                                            <span class="icon is-small is-left">
                                              <i class="fas fa-envelope"></i>
                                            </span>
                                          </div>
                                        </div>
                                        <div class="field">
                                          <label class="label">性別</label>
                                          <div class="control">
                                            <div class="select">
                                              <select>
                                                <option>性別</option>
                                                <option>男</option>
                                                <option>女</option>
                                                <option>その他</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                              <label class="label">郵便番号（上3ケタ）</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="123" value="115">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="field">
                                              <label class="label">郵便番号（下4ケタ）</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="4567" value="0051">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                              </div>
                                            </div>                  
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                              <label class="label">都道府県</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="都道府県" value="東京都">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-location-arrow"></i>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="field">
                                              <label class="label">市町村</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="市町村" value="中央区">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-location-arrow"></i>
                                                </span>
                                              </div>
                                            </div>                  
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                              <label class="label">住所1</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="例）月島１−１−１" value="月島１−１−１">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-location-arrow"></i>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="field">
                                              <label class="label">住所2</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="例）ガーデンプレイス101号室" value="ガーデンプレイス101号室">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-location-arrow"></i>
                                                </span>
                                              </div>
                                            </div>                  
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="children-infomation">
                                <div class="card">
                                  <header class="card-header">
                                    <p class="card-header-title">
                                        お子さんの情報
                                    </p>
                                </header>
                                  <div class="card-content">
                                    <div class="content">
                                        <div class="field-body">
                                            <div class="field">
                                              <label class="label">姓</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="姓" value="田中">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-user"></i>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="field">
                                              <label class="label">名</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="名" value="又暉">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-user"></i>
                                                </span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                          <p class="child-age has-text-weight-bold">お誕生日</p>
                                          <p>2016/12/12</p>
                                        </div>                          
                                        <div class="field">
                                          <p class="child-age has-text-weight-bold">年齢</p>
                                          <p>3才</p>
                                        </div>
                                        <div class="field">
                                          <label class="label">性別</label>
                                          <div class="control">
                                            <div class="select">
                                              <select>
                                                <option>性別</option>
                                                <option>男の子</option>
                                                <option>女の子</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                 </div>
                                  <div class="card-content">
                                    <div class="content">
                                        <div class="field-body">
                                            <div class="field">
                                              <label class="label">姓</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="姓" value="田中">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-user"></i>
                                                </span>
                                              </div>
                                            </div>
                                            <div class="field">
                                              <label class="label">名</label>
                                              <div class="control has-icons-left">
                                                <input class="input" type="text" placeholder="名" value="又暉">
                                                <span class="icon is-small is-left">
                                                  <i class="fas fa-user"></i>
                                                </span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="field">
                                          <p class="child-age has-text-weight-bold">お誕生日</p>
                                          <p>2016/12/12</p>
                                        </div>                          
                                        <div class="field">
                                          <p class="child-age has-text-weight-bold">年齢</p>
                                          <p>3才</p>
                                        </div>
                                        <div class="field">
                                          <label class="label">性別</label>
                                          <div class="control">
                                            <div class="select">
                                              <select>
                                                <option>性別</option>
                                                <option>男の子</option>
                                                <option>女の子</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                            </div>
                            <a class="button is-primary">保存する</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</main>
</template>

<script></script>

<style scoped>
.container-expand {
}
.side-menu {
}
.side-nav-item {
    padding-bottom: 8px;
}
.side-nav-item-title {
    color: black;
}
.btn-profile {
    margin-top: 8px;
    width: 100%;
}
.main-edit {
}
.profile-required {
    margin-bottom: 40px;
}
.children-infomation {
    margin-bottom: 40px;
}
a:hover {
    opacity: 0.6;
}
.content p:not(:last-child), .content {
    margin-bottom: 8px;
}
.field-body {
    margin-bottom: 12px;
}
</style>


