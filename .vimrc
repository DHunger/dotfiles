no <up> ddkP
no <left> <Nop>
no <right> <Nop>
no <down> ddp

ino <up> <Nop>
ino <left> <Nop>
ino <right> <Nop>
ino <down> <Nop>

vno <up> <Nop>
vno <left> <Nop>
vno <right> <Nop>
vno <down> <Nop>


ino <C-h> <ESC>:tabprevious<CR>a
ino <C-l> <ESC>:tabnext<CR>a
vno <C-h> <ESC>:tabprevious<CR>
vno <C-l> <ESC>:tabnext<CR>
no <C-h> :tabprevious<CR>
no <C-l> :tabnext<CR>

"" set colortheme
colorscheme delek

"" Pathogen

call pathogen#infect()
syntax on
filetype plugin indent on

"" NERDTree Shortcuts
no <C-t> :NERDTreeToggle<CR>
no <C-f> :NERDTreeFocus<CR>

""Line Numbers
set number relativenumber

""Autosave
ino <ESC> <ESC>:w<CR>
ino <C-ESC> <ESC>:w<CR>

"" Auto Center
no G Gzz
no gg ggzz
no { {zz
no } }zz

"" matching thingies
ino <leader>" ""<ESC>i
ino <leader>' ''<ESC>i
ino <leader>( ()<ESC>i
ino <leader>{ {}<ESC>i
ino <leader>[ []<ESC>i

""HTML Replace
""iabbr ü &uuml;
""iabbr Ü &Uuml;
""iabbr ö &ouml;
""iabbr Ö &Ouml;
""iabbr ä &auml;
""iabbr Ä &Äuml;
""iabbr ß &szlig;
ino <leader><CR> <br /><CR>