no <up> ddkP
no <left> :tabprevious<CR>
no <right> :tabnext<CR>
no <down> ddp

ino <up> <Nop>
ino <left> <ESC>:tabprevious<CR>a
ino <right> <ESC>:tabnext<CR>a
ino <down> <Nop>

vno <up> <Nop>
vno <left> <ESC>:tabprevious<CR>
vno <right> <ESC>:tabnext<CR>
vno <down> <Nop>

"" set colortheme
colorscheme delek

"" Pathogen

call pathogen#infect()
syntax on
filetype plugin indent on

"" NERDTree Shortcuts
no <C-t> :NERDTreeToggle<CR>
no <C-f> :NERDTreeFocus<CR>

"" Tab kecs
no <right> :tabnext<CR>
no <left> :tabprevious<CR>

"" Auto Center
no G Gzz
no gg ggzz
no [ [zz
no ] ]zz

"" matching thingies
ino <leader>" ""<ESC>i
ino <leader>' ''<ESC>i
ino <leader>( ()<ESC>i
ino <leader>{ {}<ESC>i
ino <leader>[ []<ESC>i

""HTML Replace
iabbr ü &uuml;
iabbr Ü &Uuml;
iabbr ö &ouml;
iabbr Ö &Ouml;
iabbr ä &auml;
iabbr Ä &Äuml;
iabbr ß &szlig;
ino <leader><CR> <br /><CR>
