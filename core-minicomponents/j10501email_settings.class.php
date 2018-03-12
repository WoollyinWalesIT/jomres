
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
0
5
0
1
e
m
a
i
l
_
s
e
t
t
i
n
g
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
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
=
 
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
;

 
 
 
 
 
 
 
 
$
l
i
s
t
s
 
=
 
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
l
i
s
t
s
'
 
]
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
u
t
p
u
t
T
e
s
t
E
m
a
i
l
J
s
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
T
I
T
L
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
Y
S
T
E
M
_
E
M
A
I
L
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
Y
S
T
E
M
_
E
M
A
I
L
S
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
"
 
v
a
l
u
e
=
"
'
.
$
j
r
C
o
n
f
i
g
[
 
'
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
Y
S
T
E
M
_
E
M
A
I
L
S
_
D
E
S
C
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
Y
S
T
E
M
_
E
M
A
I
L
S
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
T
I
T
L
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
T
I
T
L
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
_
s
e
t
t
i
n
g
s
'
 
]
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
"
 
v
a
l
u
e
=
"
'
.
$
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
H
O
S
T
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
"
 
v
a
l
u
e
=
"
'
.
$
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
O
R
T
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
"
 
v
a
l
u
e
=
"
'
.
$
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
R
O
T
O
C
O
L
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
'
 
]
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
A
U
T
H
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
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
C
O
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
"
 
v
a
l
u
e
=
"
'
.
$
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
U
S
E
R
N
A
M
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
p
a
s
s
w
o
r
d
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
n
a
m
e
=
"
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
"
 
v
a
l
u
e
=
"
'
.
$
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
_
D
E
S
C
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
N
F
I
G
_
A
L
T
E
R
N
A
T
E
_
S
M
T
P
_
P
A
S
S
W
O
R
D
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
b
u
t
t
o
n
 
t
y
p
e
=
"
b
u
t
t
o
n
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
"
 
d
a
t
a
-
t
o
g
g
l
e
=
"
m
o
d
a
l
"
 
d
a
t
a
-
t
a
r
g
e
t
=
"
#
m
y
M
o
d
a
l
"
>
'
.
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
'
,
 
f
a
l
s
e
)
.
'
<
/
b
u
t
t
o
n
>
'
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
m
o
d
a
l
 
f
a
d
e
"
 
i
d
=
"
m
y
M
o
d
a
l
"
 
t
a
b
i
n
d
e
x
=
"
-
1
"
 
r
o
l
e
=
"
d
i
a
l
o
g
"
 
a
r
i
a
-
l
a
b
e
l
l
e
d
b
y
=
"
m
y
M
o
d
a
l
L
a
b
e
l
"
 
a
r
i
a
-
h
i
d
d
e
n
=
"
t
r
u
e
"
>

	
	
	
	
	
	
	
	
	
	
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
m
o
d
a
l
-
d
i
a
l
o
g
"
>

	
	
	
	
	
	
	
	
	
	
	
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
m
o
d
a
l
-
c
o
n
t
e
n
t
"
>

	
	
	
	
	
	
	
	
	
	
	
 
 
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
m
o
d
a
l
-
h
e
a
d
e
r
"
>

	
	
	
	
	
	
	
	
	
	
	
	
<
b
u
t
t
o
n
 
t
y
p
e
=
"
b
u
t
t
o
n
"
 
c
l
a
s
s
=
"
c
l
o
s
e
"
 
d
a
t
a
-
d
i
s
m
i
s
s
=
"
m
o
d
a
l
"
 
a
r
i
a
-
l
a
b
e
l
=
"
C
l
o
s
e
"
>
<
s
p
a
n
 
a
r
i
a
-
h
i
d
d
e
n
=
"
t
r
u
e
"
>
&
t
i
m
e
s
;
<
/
s
p
a
n
>
<
/
b
u
t
t
o
n
>

	
	
	
	
	
	
	
	
	
	
	
	
<
h
4
 
c
l
a
s
s
=
"
m
o
d
a
l
-
t
i
t
l
e
"
 
i
d
=
"
m
y
M
o
d
a
l
L
a
b
e
l
"
>
'
.
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
'
,
 
f
a
l
s
e
)
.
'
<
/
h
4
>

	
	
	
	
	
	
	
	
	
	
	
 
 
<
/
d
i
v
>

	
	
	
	
	
	
	
	
	
	
	
 
 
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
m
o
d
a
l
-
b
o
d
y
"
>
'
.
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
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
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
'
,
 
f
a
l
s
e
)
.
'
<
/
b
r
>

	
	
	
	
	
	
	
	
	
	
	
	
	
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
c
l
a
s
s
=
"
i
n
p
u
t
-
l
a
r
g
e
"
 
i
d
=
"
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
"
 
v
a
l
u
e
=
"
'
.
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
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
'
,
 
'
'
)
.
'
"
 
/
>

	
	
	
	
	
	
	
	
	
	
	
 
 
<
/
d
i
v
>

	
	
	
	
	
	
	
	
	
	
	
 
 
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
m
o
d
a
l
-
f
o
o
t
e
r
"
>

	
	
	
	
	
	
	
	
	
	
	
	
<
b
u
t
t
o
n
 
t
y
p
e
=
"
b
u
t
t
o
n
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
e
f
a
u
l
t
"
 
d
a
t
a
-
d
i
s
m
i
s
s
=
"
m
o
d
a
l
"
>
'
.
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
C
O
M
M
O
N
_
C
L
O
S
E
'
,
 
'
C
O
M
M
O
N
_
C
L
O
S
E
'
,
 
f
a
l
s
e
)
.
'
<
/
b
u
t
t
o
n
>

	
	
	
	
	
	
	
	
	
	
	
	
<
b
u
t
t
o
n
 
t
y
p
e
=
"
b
u
t
t
o
n
"
 
i
d
=
"
s
u
b
m
i
t
_
t
e
s
t
_
e
m
a
i
l
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
p
r
i
m
a
r
y
"
>
'
.
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
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
E
S
T
_
E
M
A
I
L
_
S
E
N
D
'
,
 
f
a
l
s
e
)
.
'
<
/
b
u
t
t
o
n
>

	
	
	
	
	
	
	
	
	
	
	
 
 
<
/
d
i
v
>

	
	
	
	
	
	
	
	
	
	
	
<
/
d
i
v
>

	
	
	
	
	
	
	
	
	
	
<
/
d
i
v
>

	
	
	
	
	
	
	
	
	
<
/
d
i
v
>
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
;

 
 
 
 
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
 
o
u
t
p
u
t
T
e
s
t
E
m
a
i
l
J
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
?
>

<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>

<
!
-
-

j
o
m
r
e
s
J
q
u
e
r
y
(
f
u
n
c
t
i
o
n
(
)
 
{

	
/
/
t
w
i
t
t
e
r
 
b
o
o
t
s
t
r
a
p
 
s
c
r
i
p
t

	
j
o
m
r
e
s
J
q
u
e
r
y
(
"
b
u
t
t
o
n
#
s
u
b
m
i
t
_
t
e
s
t
_
e
m
a
i
l
"
)
.
c
l
i
c
k
(
f
u
n
c
t
i
o
n
(
)
{

	
	
v
a
r
 
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
 
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
#
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
"
 
)
.
v
a
l
(
)
;

	
	

	
	
v
a
r
 
c
f
g
_
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
	
	
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
i
n
p
u
t
[
n
a
m
e
*
=
'
c
f
g
_
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
'
]
"
 
)
.
v
a
l
(
)
;

	
	
v
a
r
 
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
	
	
	
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
i
n
p
u
t
[
n
a
m
e
*
=
'
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
'
]
"
 
)
.
v
a
l
(
)
;

	
	
v
a
r
 
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
	
	
	
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
i
n
p
u
t
[
n
a
m
e
*
=
'
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
'
]
"
 
)
.
v
a
l
(
)
;

	
	
v
a
r
 
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
	
	
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
i
n
p
u
t
[
n
a
m
e
*
=
'
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
'
]
"
 
)
.
v
a
l
(
)
;

	
	
v
a
r
 
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
'
#
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
1
_
i
d
'
 
)
.
h
a
s
C
l
a
s
s
(
"
a
c
t
i
v
e
"
)
;

	
	
v
a
r
 
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
	
	
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
i
n
p
u
t
[
n
a
m
e
*
=
'
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
'
]
"
 
)
.
v
a
l
(
)
;

	
	
v
a
r
 
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
	
	
	
=
 
j
o
m
r
e
s
J
q
u
e
r
y
(
 
"
i
n
p
u
t
[
n
a
m
e
*
=
'
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
'
]
"
 
)
.
v
a
l
(
)
;

	
	

	
	
j
o
m
r
e
s
J
q
u
e
r
y
.
a
j
a
x
(
{

	
	
	
t
y
p
e
:
 
"
P
O
S
T
"
,

	
	
	
u
r
l
:
 
"
<
?
p
h
p
 
e
c
h
o
 
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
_
A
J
A
X
 
?
>
&
t
a
s
k
=
a
j
a
x
_
s
e
n
d
_
t
e
s
t
_
e
m
a
i
l
&
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
=
"
+
t
e
s
t
_
e
m
a
i
l
_
a
d
d
r
e
s
s
+
"
&
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
=
"
+
c
f
g
_
d
e
f
a
u
l
t
_
f
r
o
m
_
a
d
d
r
e
s
s
+
"
&
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
=
"
+
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
h
o
s
t
+
"
&
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
=
"
+
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
o
r
t
+
"
&
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
=
"
+
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
r
o
t
o
c
o
l
+
"
&
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
=
"
+
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
+
"
&
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
=
"
+
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
r
n
a
m
e
+
"
&
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
=
"
+
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
p
a
s
s
w
o
r
d
,

	
	
	
s
u
c
c
e
s
s
:
 
f
u
n
c
t
i
o
n
(
d
a
t
a
)
 
{

	
	
	
	
i
f
(
d
a
t
a
.
s
t
a
t
u
s
 
=
=
 
t
r
u
e
)
{

	
	
	
	
	
a
l
e
r
t
(
"
<
?
p
h
p
 
e
c
h
o
 
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
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
S
U
C
C
E
S
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
T
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
S
U
C
C
E
S
S
'
,
 
f
a
l
s
e
)
;
 
?
>
"
)
;

	
	
	
	
}
e
l
s
e
{

	
	
	
	
	
a
l
e
r
t
(
 
"
<
?
p
h
p
 
e
c
h
o
 
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
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
F
A
I
L
U
R
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
T
E
S
T
_
E
M
A
I
L
_
R
E
S
U
L
T
_
F
A
I
L
U
R
E
'
,
 
f
a
l
s
e
)
;
 
?
>
 
"
 
+
 
d
a
t
a
.
f
a
i
l
u
r
e
_
m
e
s
s
a
g
e
)
;

	
	
	
	
}

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
'
#
m
y
M
o
d
a
l
'
)
.
m
o
d
a
l
(
'
h
i
d
e
'
)
;

	
	
	
}
,

	
	
	

	
	
}
)
;

	
	

	
}
)
;

}
)
;

/
/
-
-
>

<
/
s
c
r
i
p
t
>

	
	
<
?
p
h
p
 

 
 
 
 
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

