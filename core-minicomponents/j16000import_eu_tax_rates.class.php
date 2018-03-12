
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
1
6
0
0
0
i
m
p
o
r
t
_
e
u
_
t
a
x
_
r
a
t
e
s

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
d
e
l
e
t
e
A
l
l
T
a
x
R
a
t
e
s
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
h
t
t
p
:
/
/
e
n
.
w
i
k
i
p
e
d
i
a
.
o
r
g
/
w
i
k
i
/
E
u
r
o
p
e
a
n
_
U
n
i
o
n
_
v
a
l
u
e
_
a
d
d
e
d
_
t
a
x
#
E
U
_
V
A
T
_
a
r
e
a


 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
M
w
S
t
.
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
M
e
h
r
w
e
r
t
s
t
e
u
e
r
 
(
A
u
s
t
r
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
1
,
 
'
c
o
d
e
'
 
=
>
 
'
B
T
W
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
B
e
l
a
s
t
i
n
g
 
o
v
e
r
 
d
e
 
t
o
e
g
e
v
o
e
g
d
e
 
w
a
a
r
d
e
 
(
B
e
l
g
i
u
m
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
Ð
”
Ð
”
Ð
¡
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
Ð
”
Ð
°
Ð
½
Ñ
Š
Ð
º
 
Ð
²
Ñ
Š
Ñ
€
Ñ
…
Ñ
ƒ
 
Ð
´
Ð
¾
Ð
±
Ð
°
Ð
²
Ð
µ
Ð
½
Ð
°
Ñ
‚
Ð
°
 
Ñ

Ñ
‚
Ð
¾
Ð
¹
Ð
½
Ð
¾
Ñ

Ñ
‚
 
 
(
B
u
l
g
a
r
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
5
,
 
'
c
o
d
e
'
 
=
>
 
'
P
D
V
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
P
o
r
e
z
 
n
a
 
d
o
d
a
n
u
 
v
r
i
j
e
d
n
o
s
t
 
(
C
r
o
a
t
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
1
9
,
 
'
c
o
d
e
'
 
=
>
 
'
Î
¦
Î
 
Î
‘
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
Î
¦
Ï
Œ
Ï

Î
¿
Ï
‚
 
Î
 
Ï

Î
¿
Ï
ƒ
Ï
„
Î
¹
Î
¸
Î
­
Î
¼
Î
µ
Î
½
Î
·
Ï
‚
 
Î
‘
Î
¾
Î
¯
Î
±
Ï
‚
 
(
C
y
p
r
u
s
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
1
,
 
'
c
o
d
e
'
 
=
>
 
'
D
P
H
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
D
a
Å
ˆ
 
z
 
p
Å
™
i
d
a
n
Ã
©
 
h
o
d
n
o
t
y
 
(
C
z
e
c
h
 
R
e
p
u
b
l
i
c
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
5
,
 
'
c
o
d
e
'
 
=
>
 
'
m
o
m
s
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
M
e
r
o
m
s
Ã
¦
t
n
i
n
g
s
a
f
g
i
f
t
 
(
D
e
n
m
a
r
k
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
k
m
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
k
Ã
¤
i
b
e
m
a
k
s
 
(
E
s
t
o
n
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
4
,
 
'
c
o
d
e
'
 
=
>
 
'
A
L
V
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
A
r
v
o
n
l
i
s
Ã
¤
v
e
r
o
 
(
F
i
n
l
a
n
d
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
0
,
 
'
c
o
d
e
'
 
=
>
 
'
A
L
V
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
A
r
v
o
n
l
i
s
Ã
¤
v
e
r
o
 
(
F
i
n
l
a
n
d
 
Ã
…
l
a
n
d
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
T
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
T
a
x
e
 
s
u
r
 
l
a
 
v
a
l
e
u
r
 
a
j
o
u
t
Ã
©
e
 
(
F
r
a
n
c
e
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
1
9
,
 
'
c
o
d
e
'
 
=
>
 
'
M
w
S
t
.
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
M
e
h
r
w
e
r
t
s
t
e
u
e
r
 
(
G
e
r
m
a
n
y
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
3
,
 
'
c
o
d
e
'
 
=
>
 
'
Î
¦
Î
 
Î
‘
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
Î
¦
Ï
Œ
Ï

Î
¿
Ï
‚
 
Î
 
Ï

Î
¿
Ï
ƒ
Ï
„
Î
¹
Î
¸
Î
­
Î
¼
Î
µ
Î
½
Î
·
Ï
‚
 
Î
‘
Î
¾
Î
¯
Î
±
Ï
‚
 
(
G
r
e
e
c
e
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
7
,
 
'
c
o
d
e
'
 
=
>
 
'
Ã

F
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
Ã
¡
l
t
a
l
Ã
¡
n
o
s
 
f
o
r
g
a
l
m
i
 
a
d
Ã
³
 
(
H
u
n
g
a
r
y
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
3
,
 
'
c
o
d
e
'
 
=
>
 
'
V
A
T
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
V
a
l
u
e
 
A
d
d
e
d
 
T
a
x
 
(
I
r
e
l
a
n
d
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
2
,
 
'
c
o
d
e
'
 
=
>
 
'
I
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
I
m
p
o
s
t
a
 
s
u
l
 
V
a
l
o
r
e
 
A
g
g
i
u
n
t
o
 
(
I
t
a
l
y
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
1
,
 
'
c
o
d
e
'
 
=
>
 
'
P
V
N
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
P
i
e
v
i
e
n
o
t
Ä

s
 
v
Ä
“
r
t
Ä
«
b
a
s
 
n
o
d
o
k
l
i
s
 
(
L
a
t
v
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
1
,
 
'
c
o
d
e
'
 
=
>
 
'
P
V
M
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
P
r
i
d
Ä
—
t
i
n
Ä
—
s
 
v
e
r
t
Ä
—
s
 
m
o
k
e
s
t
i
s
 
(
L
i
t
h
u
a
n
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
1
7
,
 
'
c
o
d
e
'
 
=
>
 
'
T
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
T
a
x
e
 
s
u
r
 
l
a
 
V
a
l
e
u
r
 
A
j
o
u
t
Ã
©
e
 
(
L
u
x
e
m
b
o
u
r
g
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
1
8
,
 
'
c
o
d
e
'
 
=
>
 
'
V
A
T
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
T
a
x
x
a
 
f
u
q
 
i
l
-
V
a
l
u
r
 
M
i
Å
¼
j
u
d
 
(
M
a
l
t
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
1
,
 
'
c
o
d
e
'
 
=
>
 
'
B
T
W
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
B
e
l
a
s
t
i
n
g
 
t
o
e
g
e
v
o
e
g
d
e
 
w
a
a
r
d
e
 
(
N
e
t
h
e
r
l
a
n
d
s
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
3
,
 
'
c
o
d
e
'
 
=
>
 
'
P
T
U
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
P
o
d
a
t
e
k
 
o
d
 
t
o
w
a
r
Ã
³
w
 
i
 
u
s
Å
‚
u
g
 
(
P
o
l
a
n
d
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
3
,
 
'
c
o
d
e
'
 
=
>
 
'
I
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
I
m
p
o
s
t
o
 
s
o
b
r
e
 
o
 
V
a
l
o
r
 
A
c
r
e
s
c
e
n
t
a
d
o
 
(
P
o
r
t
u
g
a
l
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
3
,
 
'
c
o
d
e
'
 
=
>
 
'
I
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
I
m
p
o
s
t
o
 
s
o
b
r
e
 
o
 
V
a
l
o
r
 
A
c
r
e
s
c
e
n
t
a
d
o
 
(
M
a
d
e
i
r
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
3
,
 
'
c
o
d
e
'
 
=
>
 
'
I
V
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
A
 
I
m
p
o
s
t
o
 
s
o
b
r
e
 
o
 
V
a
l
o
r
 
A
c
r
e
s
c
e
n
t
a
d
o
 
(
A
z
o
r
e
s
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
1
9
,
 
'
c
o
d
e
'
 
=
>
 
'
T
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
T
a
x
a
 
p
e
 
v
a
l
o
a
r
e
a
 
a
d
Ä
ƒ
u
g
a
t
Ä
ƒ
 
(
R
o
m
a
n
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
D
P
H
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
D
a
Å
ˆ
 
z
 
p
r
i
d
a
n
e
j
 
h
o
d
n
o
t
y
 
(
S
l
o
v
a
k
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
2
,
 
'
c
o
d
e
'
 
=
>
 
'
D
D
V
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
D
a
v
e
k
 
n
a
 
d
o
d
a
n
o
 
v
r
e
d
n
o
s
t
 
(
S
l
o
v
e
n
i
a
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
1
,
 
'
c
o
d
e
'
 
=
>
 
'
I
V
A
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
I
m
p
u
e
s
t
o
 
s
o
b
r
e
 
e
l
 
v
a
l
o
r
 
a
Ã
±
a
d
i
d
o
 
(
S
p
a
i
n
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
7
,
 
'
c
o
d
e
'
 
=
>
 
'
I
G
I
C
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
I
m
p
u
e
s
t
o
 
G
e
n
e
r
a
l
 
I
n
d
i
r
e
c
t
o
 
C
a
n
a
r
i
o
 
(
C
a
n
a
r
y
 
I
s
l
a
n
d
s
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
5
,
 
'
c
o
d
e
'
 
=
>
 
'
M
o
m
s
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
M
e
r
v
Ã
¤
r
d
e
s
s
k
a
t
t
 
(
S
w
e
d
e
n
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
V
A
T
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
V
a
l
u
e
 
A
d
d
e
d
 
T
a
x
 
(
U
n
i
t
e
d
 
K
i
n
g
d
o
m
)
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
e
w
_
t
a
x
_
r
a
t
e
s
[
]
 
=
 
a
r
r
a
y
(
'
r
a
t
e
'
 
=
>
 
2
0
,
 
'
c
o
d
e
'
 
=
>
 
'
 
V
A
T
'
,
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
V
a
l
u
e
 
A
d
d
e
d
 
T
a
x
 
(
I
s
l
e
 
o
f
 
M
a
n
)
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
n
e
w
_
t
a
x
_
r
a
t
e
s
 
a
s
 
$
r
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
d
'
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
c
o
d
e
'
]
 
=
 
$
r
a
t
e
[
'
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
r
a
t
e
'
]
 
=
 
$
r
a
t
e
[
'
r
a
t
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
r
a
t
e
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
c
o
m
m
i
t
T
a
x
R
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
l
i
s
t
_
t
a
x
r
a
t
e
s
'
)
,
 
'
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
,
 
c
o
u
l
d
 
n
o
t
 
T
R
U
N
A
C
A
T
E
 
t
a
x
 
r
a
t
e
s
 
t
a
b
l
e
 
f
o
r
 
s
o
m
e
 
r
e
a
s
o
n
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

