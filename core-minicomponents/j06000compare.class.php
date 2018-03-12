
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
0
6
0
0
0
c
o
m
p
a
r
e

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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
s
k
'
 
=
>
 
'
c
o
m
p
a
r
e
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
s
'
 
=
>
 
a
r
r
a
y
(
0
 
=
>
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
'
p
r
o
p
e
r
t
y
_
u
i
d
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
M
P
A
R
E
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
S
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
2
,
8
,
7
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
M
P
A
R
E
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
a
d
d
_
g
m
a
p
s
_
s
o
u
r
c
e
(
)
;

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
r
o
p
e
r
t
y
_
u
i
d
s
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
/
/
 
C
l
e
a
n
 
t
h
e
m
 
s
u
k
k
a
s
 
u
p

 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
 
=
 
a
r
r
a
y
(
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
b
a
n
g
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
p
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
[
 
]
 
=
 
(
i
n
t
)
 
$
p
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
$
t
m
p
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
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

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
R
E
T
U
R
N
_
T
O
_
R
E
S
U
L
T
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
R
E
T
U
R
N
_
T
O
_
R
E
S
U
L
T
S
'
,
 
'
_
J
O
M
R
E
S
_
R
E
T
U
R
N
_
T
O
_
R
E
S
U
L
T
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
R
E
T
U
R
N
_
T
O
_
R
E
S
U
L
T
S
_
L
I
N
K
'
 
]
 
=
 
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
.
'
&
t
a
s
k
=
s
e
a
r
c
h
'
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
N
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
P
T
Y
P
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
P
T
Y
P
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
S
T
A
R
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
S
O
R
T
O
R
D
E
R
_
S
T
A
R
S
'
,
 
'
_
J
O
M
R
E
S
_
S
O
R
T
O
R
D
E
R
_
S
T
A
R
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
S
F
R
O
M
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
T
A
R
I
F
F
S
F
R
O
M
'
,
 
'
_
J
O
M
R
E
S
_
T
A
R
I
F
F
S
F
R
O
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
M
A
P
P
I
N
G
L
I
N
K
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
c
k
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
T
i
c
k
.
p
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
r
o
s
s
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
C
a
n
c
e
l
.
p
n
g
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
g
a
t
h
e
r
_
l
o
w
e
s
t
_
p
r
i
c
e
s
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
_
m
u
l
t
i
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
s
A
r
r
a
y
 
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
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
,
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
,
i
m
a
g
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
h
o
t
e
l
_
f
e
a
t
u
r
e
s
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
0
'
 
O
R
D
E
R
 
B
Y
 
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
L
i
s
t
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
F
E
A
T
U
R
E
S
_
A
B
B
V
'
.
(
i
n
t
)
 
$
f
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
f
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
F
E
A
T
U
R
E
S
_
D
E
S
C
'
.
(
i
n
t
)
 
$
f
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
f
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
s
A
r
r
a
y
[
 
$
f
-
>
h
o
t
e
l
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
 
=
 
a
r
r
a
y
(
'
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
'
 
=
>
 
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
,
 
'
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
'
 
=
>
 
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
,
 
'
i
m
a
g
e
'
 
=
>
 
$
f
-
>
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
i
d
,
p
t
y
p
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
t
y
p
e
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
s
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
t
y
p
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
t
y
p
e
s
 
a
s
 
$
p
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
t
y
p
e
s
[
 
$
p
-
>
i
d
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
P
R
O
P
E
R
T
Y
T
Y
P
E
S
'
.
(
i
n
t
)
 
$
p
-
>
i
d
,
 
$
p
-
>
p
t
y
p
e
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
_
i
m
a
g
e
_
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
n
o
i
m
a
g
e
.
g
i
f
'
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
W
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
o
u
t
 
w
h
i
c
h
 
f
e
a
t
u
r
e
s
 
a
r
e
 
u
s
e
d
 
b
y
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
f
o
u
n
d
 
i
n
 
t
h
e
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s

 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
u
s
e
d
_
f
e
a
t
u
r
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
 
a
s
 
$
p
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
(
$
p
r
o
p
e
r
t
y
[
 
'
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
a
s
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
_
u
s
e
d
_
f
e
a
t
u
r
e
s
[
 
$
v
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
r
e
s
u
l
t
 
a
s
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
>
 
$
p
r
o
p
e
r
t
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
$
p
r
o
p
e
r
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
P
R
O
P
E
R
T
Y
_
U
I
D
'
 
]
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
A
r
g
s
 
=
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
p
r
o
p
e
r
t
y
_
u
i
d
,
 
'
w
i
d
t
h
'
 
=
>
 
'
1
1
9
'
,
 
'
h
e
i
g
h
t
'
 
=
>
 
'
9
5
'
,
 
'
d
i
s
a
b
l
e
_
u
i
'
 
=
>
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
1
0
5
0
'
,
 
'
x
_
g
e
o
c
o
d
e
r
'
,
 
$
A
r
g
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
A
P
'
 
]
 
=
 
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
m
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
D
a
t
a
[
 
'
0
1
0
5
0
'
 
]
[
 
'
x
_
g
e
o
c
o
d
e
r
'
 
]
;


	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
)
)
 
{

	
	
	
	
	
$
r
[
 
'
P
R
I
C
E
_
P
R
E
_
T
E
X
T
'
 
]
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
[
 
'
P
R
E
_
T
E
X
T
'
 
]
;

	
	
	
	
	
$
r
[
 
'
P
R
I
C
E
_
P
R
I
C
E
'
 
]
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
[
 
'
P
R
I
C
E
'
 
]
;

	
	
	
	
	
$
r
[
 
'
P
R
I
C
E
_
P
O
S
T
_
T
E
X
T
'
 
]
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
p
r
o
p
e
r
t
y
_
u
i
d
]
[
 
'
P
O
S
T
_
T
E
X
T
'
 
]
;

	
	
	
	
}



 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
n
o
i
m
a
g
e
.
g
i
f
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
_
p
r
o
p
e
r
t
y
_
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
_
p
r
o
p
e
r
t
y
_
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
.
j
p
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
I
M
A
G
E
T
H
U
M
B
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
0
]
[
'
s
m
a
l
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
I
M
A
G
E
M
E
D
I
U
M
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
'
]
[
0
]
[
0
]
[
'
m
e
d
i
u
m
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
(
$
p
r
o
p
e
r
t
y
[
 
'
p
r
o
p
e
r
t
y
_
f
e
a
t
u
r
e
s
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
f
e
a
t
u
r
e
s
A
r
r
a
y
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
k
,
 
$
a
l
l
_
u
s
e
d
_
f
e
a
t
u
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
k
,
 
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
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
I
M
A
G
E
'
 
=
>
 
'
<
d
i
v
 
c
l
a
s
s
=
"
u
i
-
i
c
o
n
 
u
i
-
i
c
o
n
-
c
h
e
c
k
"
 
s
t
y
l
e
=
"
h
e
i
g
h
t
:
2
0
p
x
;
"
>
<
/
d
i
v
>
'
,
 
'
C
L
A
S
S
'
 
=
>
 
$
c
l
a
s
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
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
I
M
A
G
E
'
 
=
>
 
'
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
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
I
M
A
G
E
'
 
=
>
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
-
>
a
d
d
R
o
w
s
(
'
f
s
'
,
 
$
f
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
c
o
m
p
a
r
e
_
f
e
a
t
u
r
e
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
F
E
A
T
U
R
E
S
'
 
]
 
=
 
$
t
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
S
T
A
R
S
I
M
A
G
E
S
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
=
 
$
p
r
o
p
e
r
t
y
[
 
'
s
t
a
r
s
'
 
]
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
S
T
A
R
S
I
M
A
G
E
S
'
 
]
 
.
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
s
t
a
r
.
p
n
g
"
 
a
l
t
=
"
s
t
a
r
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
V
E
_
S
I
T
E
'
 
]
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
L
I
N
K
'
 
]
 
=
 
g
e
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
_
u
r
l
(
$
p
r
o
p
e
r
t
y
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
$
e
d
i
t
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
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
A
N
D
O
M
_
I
D
E
N
T
I
F
I
E
R
'
 
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
 
=
 
$
p
r
o
p
e
r
t
y
[
 
'
p
t
y
p
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
P
R
O
P
E
R
T
Y
_
T
Y
P
E
'
 
]
 
=
 
$
p
r
o
p
e
r
t
y
_
t
y
p
e
s
[
 
$
p
t
y
p
e
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
i
s
 
t
h
e
 
s
t
r
i
n
g
 
w
h
e
r
e
 
t
h
e
 
"
r
e
m
o
v
e
 
f
r
o
m
 
t
h
i
s
 
l
i
s
t
"
 
u
r
l
 
i
s
 
b
u
i
l
d
 
f
r
o
m

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
_
u
r
l
_
s
t
r
i
n
g
 
=
 
'
&
p
r
o
p
e
r
t
y
_
u
i
d
s
=
'
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
p
r
o
p
e
r
t
y
_
u
i
d
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
 
!
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
_
u
r
l
_
s
t
r
i
n
g
 
.
=
 
$
i
d
.
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
_
J
O
M
R
E
S
_
R
E
M
O
V
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
R
E
M
O
V
E
'
,
 
'
_
J
O
M
R
E
S
_
R
E
M
O
V
E
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
E
M
O
V
E
_
L
I
N
K
'
 
]
 
=
 
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
.
'
&
t
a
s
k
=
c
o
m
p
a
r
e
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
s
_
u
r
l
_
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
i
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
f
e
a
t
u
r
e
s
A
r
r
a
y
 
a
s
 
$
f
e
a
t
u
r
e
_
i
d
 
=
>
 
$
f
e
a
t
u
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
f
e
a
t
u
r
e
_
i
d
,
 
$
a
l
l
_
u
s
e
d
_
f
e
a
t
u
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
 
%
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
o
d
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
 
=
 
'
e
v
e
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
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
F
E
A
T
U
R
E
_
N
A
M
E
'
 
=
>
 
$
f
e
a
t
u
r
e
[
 
'
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
'
 
]
,
 
'
C
L
A
S
S
'
 
=
>
 
$
c
l
a
s
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
i
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
f
e
a
t
u
r
e
s
'
,
 
$
f
e
a
t
u
r
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
c
o
m
p
a
r
e
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
O
h
,
 
t
h
e
 
n
a
u
g
h
t
y
 
l
i
t
t
l
e
 
t
i
n
k
e
r
,
 
t
h
e
y
'
v
e
 
r
e
m
o
v
e
d
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
 
f
r
o
m
 
t
h
e
i
r
 
l
i
s
t
,
 
w
e
'
l
l
 
j
u
s
t
 
s
e
n
d
 
t
h
e
m
 
b
a
c
k
 
t
o
 
t
h
e
 
s
e
a
r
c
h
 
r
e
s
u
l
t
s

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
1
0
0
4
'
)
;
 
/
/
 
o
p
t
i
o
n
a
l

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
1
0
0
5
'
)
;
 
/
/
 
o
p
t
i
o
n
a
l

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
1
0
0
6
'
)
;
 
/
/
 
o
p
t
i
o
n
a
l

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
1
0
0
7
'
)
;
 
/
/
 
o
p
t
i
o
n
a
l

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
p
r
o
p
e
r
t
y
s
_
u
i
d
'
 
]
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
a
j
a
x
_
l
i
s
t
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
1
0
1
0
'
,
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)
;
 
/
/
 
l
i
s
t
P
r
o
p
e
r
t
y
s

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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

