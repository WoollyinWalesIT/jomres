
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
7
0
7
0
f
a
q
_
a
d
m
i
n
_
q
u
e
s
t
i
o
n
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
k
b
 
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
k
n
o
w
l
e
d
g
e
b
a
s
e
'
)
;


 
 
 
 
 
 
 
 
/
/
i
n
t
r
o

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
I
N
T
R
O
D
U
C
T
I
O
N
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
W
H
A
T
I
S
J
O
M
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
I
N
T
R
O
D
U
C
T
I
O
N
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
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
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
F
I
R
S
T
T
H
I
N
G
S
F
I
R
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
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
I
N
T
R
O
D
U
C
T
I
O
N
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
D
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
U
S
E
R
S
A
D
D
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
I
N
T
R
O
D
U
C
T
I
O
N
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
N
T
R
O
D
U
C
T
I
O
N
_
P
R
O
F
I
L
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
 
P
l
u
g
i
n
s

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
L
U
G
I
N
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
L
U
G
I
N
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
O
N
C
U
B
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
L
U
G
I
N
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
A
T
I
O
N
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
G
E
N
E
R
A
L
_
P
L
U
G
I
N
S
_
I
N
S
T
A
L
L
A
T
I
O
N
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
 
L
o
c
a
l
i
s
a
t
i
o
n

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
L
O
C
A
L
I
S
A
T
I
O
N
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
L
O
C
A
L
I
S
A
T
I
O
N
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
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

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
O
P
E
R
T
I
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
A
D
D
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
A
D
D
P
R
O
P
E
R
T
I
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
A
D
D
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
U
M
B
E
R
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
P
R
O
P
E
R
T
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
B
O
O
K
I
N
G
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
I
M
P
O
R
T
B
O
O
K
I
N
G
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
B
O
O
K
I
N
G
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
I
M
P
O
R
T
B
O
O
K
I
N
G
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
E
M
A
I
L
T
E
M
P
L
A
T
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
E
M
A
I
L
T
E
M
P
L
A
T
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
E
M
A
I
L
T
E
M
P
L
A
T
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
E
M
A
I
L
T
E
M
P
L
A
T
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
_
S
E
T
U
P
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
R
O
P
E
R
T
I
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
C
U
R
R
E
N
C
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
C
U
R
R
E
N
C
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
p
a
y
m
e
n
t
s

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
A
K
E
P
A
Y
M
E
N
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
A
K
E
P
A
Y
M
E
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
A
K
E
P
A
Y
M
E
N
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
A
K
E
P
A
Y
M
E
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
W
H
I
C
H
G
A
T
E
W
A
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
W
H
I
C
H
G
A
T
E
W
A
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
W
H
I
C
H
G
A
T
E
W
A
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
W
H
I
C
H
G
A
T
E
W
A
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
A
Y
M
E
N
T
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
A
Y
M
E
N
T
A
C
C
O
U
N
T
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
 
S
i
t
e
 
S
t
r
u
c
t
u
r
e

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
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
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
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
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
P
R
O
P
E
R
T
Y
F
E
A
T
U
R
E
C
A
T
E
G
O
R
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
R
O
O
M
F
E
A
T
U
R
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
S
I
T
E
S
T
R
U
C
T
U
R
E
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
S
I
T
E
S
T
R
U
C
T
U
R
E
_
C
O
U
N
T
R
I
E
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
 
T
o
u
r
s

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
I
N
T
R
O
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
I
N
T
R
O
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
I
N
T
R
O
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
L
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
H
O
W
T
O
S
E
L
L
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
W
H
A
T
I
S
J
I
N
T
O
U
R
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
A
M
E
B
O
O
K
I
N
G
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
R
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
S
T
A
N
D
A
L
O
N
E
T
O
U
R
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
O
U
R
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
R
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
O
U
R
S
_
G
L
O
B
A
L
T
O
U
R
S
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
t
r
o
u
b
l
e
s
h
o
o
t
i
n
g

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
L
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
E
M
A
I
L
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
T
R
O
U
B
L
E
S
H
O
O
T
I
N
G
_
N
O
G
A
T
E
W
A
Y
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
/
/
p
u
r
c
h
a
s
i
n
g
 
j
o
m
r
e
s

 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
F
O
R
C
E
D
T
O
S
U
B
S
C
R
I
B
E
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
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
F
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
D
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
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
F
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
E
X
P
I
R
E
D
'
,
 
f
a
l
s
e
)
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
k
b
-
>
a
d
m
i
n
_
f
a
q
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
A
Q
_
A
D
M
I
N
_
C
A
T
E
G
O
R
Y
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
'
]
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
q
u
e
s
t
i
o
n
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
S
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
A
Q
_
A
D
M
I
N
_
Q
U
E
S
T
I
O
N
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
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
,

 
 
 
 
 
 
 
 
 
 
 
 
'
a
n
s
w
e
r
'
 
=
>
 
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
S
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
A
Q
_
A
D
M
I
N
_
A
N
S
W
E
R
_
P
U
R
C
H
A
S
I
N
G
J
O
M
R
E
S
_
S
O
F
T
W
A
R
E
L
I
C
E
N
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
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
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

