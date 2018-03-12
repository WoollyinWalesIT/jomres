
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
t
o
u
c
h
_
t
e
m
p
l
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

 
 
 
 
 
 
 
 
i
f
 
(
!
t
r
a
n
s
l
a
t
i
o
n
_
u
s
e
r
_
c
h
e
c
k
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
2
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
O
U
C
H
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
T
O
U
C
H
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
.
'
 
-
 
'
.
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
a
n
g
'
)
.
'
<
/
h
2
>
<
b
r
/
>
'
;


 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
s
u
b
s
c
r
i
p
t
i
o
n
_
p
a
c
k
a
g
e
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
s
u
b
s
c
r
i
p
t
i
o
n
_
p
a
c
k
a
g
e
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
b
a
s
i
c
_
s
u
b
s
c
r
i
p
t
i
o
n
_
p
a
c
k
a
g
e
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
a
l
l
P
a
c
k
a
g
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
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
R
P
O
R
T
A
L
_
S
U
B
S
C
R
I
P
T
I
O
N
S
_
P
A
C
K
A
G
E
S
_
T
I
T
L
E
'
)
.
'
<
b
r
/
>
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
b
a
s
i
c
_
s
u
b
s
c
r
i
p
t
i
o
n
_
p
a
c
k
a
g
e
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
a
l
l
P
a
c
k
a
g
e
s
 
a
s
 
$
p
a
c
k
a
g
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
c
k
_
n
a
m
e
 
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
S
U
B
S
C
R
I
P
T
I
O
N
P
A
C
K
A
G
E
S
_
N
A
M
E
'
.
$
p
a
c
k
a
g
e
[
 
'
i
d
'
 
]
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
p
a
c
k
a
g
e
[
 
'
n
a
m
e
'
 
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
c
k
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
S
U
B
S
C
R
I
P
T
I
O
N
P
A
C
K
A
G
E
S
_
D
E
S
C
'
.
$
p
a
c
k
a
g
e
[
 
'
i
d
'
 
]
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
p
a
c
k
a
g
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
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
p
a
c
k
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
p
a
c
k
_
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
r
/
>
'
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
 
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
,
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
 
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
r
o
o
m
_
c
l
a
s
s
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
 
"
;

 
 
 
 
 
 
 
 
$
r
o
o
m
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

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
o
o
m
t
y
p
e
s
 
a
s
 
$
r
T
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
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
R
O
O
M
T
Y
P
E
S
_
A
B
B
V
'
.
$
r
T
y
p
e
-
>
r
o
o
m
_
c
l
a
s
s
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
r
T
y
p
e
-
>
r
o
o
m
_
c
l
a
s
s
_
a
b
b
v
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
r
o
o
m
t
y
p
e
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
R
O
O
M
T
Y
P
E
S
_
D
E
S
C
'
.
$
r
T
y
p
e
-
>
r
o
o
m
_
c
l
a
s
s
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
r
T
y
p
e
-
>
r
o
o
m
_
c
l
a
s
s
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
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
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
.
'
/
'
.
$
r
T
y
p
e
-
>
i
m
a
g
e
.
'
"
 
/
>
'
;
 
/
/
 
D
o
 
n
o
t
 
r
e
-
e
n
a
b
l
e
 
t
h
i
s
 
l
i
n
e
,
 
i
f
 
y
o
u
 
d
o
 
t
h
e
n
 
J
o
m
r
e
s
 
w
i
l
l
 
n
o
t
 
'
h
o
l
d
'
 
t
h
e
 
c
u
r
r
e
n
t
 
l
a
n
g
u
a
g
e
 
b
e
c
a
u
s
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
 
s
h
o
w
t
i
m
e
 
t
r
i
g
g
e
r
s
 
t
h
e
 
c
r
e
a
t
i
o
n
 
o
f
 
a
 
p
h
a
n
t
o
m
 
s
e
s
s
i
o
n
 
f
i
l
e
 
i
n
 
t
h
e
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
.

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
r
o
o
m
t
y
p
e
_
a
b
b
v
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
"
&
n
b
s
p
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
$
r
o
o
m
t
y
p
e
_
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
r
/
>
'
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
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
.
'
/
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
F
e
a
t
u
r
e
-
>
i
m
a
g
e
.
'
"
 
/
>
'
;
 
 
/
/
 
D
o
 
n
o
t
 
r
e
-
e
n
a
b
l
e
 
t
h
i
s
 
l
i
n
e
,
 
i
f
 
y
o
u
 
d
o
 
t
h
e
n
 
J
o
m
r
e
s
 
w
i
l
l
 
n
o
t
 
'
h
o
l
d
'
 
t
h
e
 
c
u
r
r
e
n
t
 
l
a
n
g
u
a
g
e
 
b
e
c
a
u
s
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
 
s
h
o
w
t
i
m
e
 
t
r
i
g
g
e
r
s
 
t
h
e
 
c
r
e
a
t
i
o
n
 
o
f
 
a
 
p
h
a
n
t
o
m
 
s
e
s
s
i
o
n
 
f
i
l
e
 
i
n
 
t
h
e
 
r
o
o
t
 
d
i
r
e
c
t
o
r
y
.

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
f
e
a
t
u
r
e
_
d
e
s
c
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
r
/
>
'
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
y
 
f
e
a
t
u
r
e
s
 
c
a
t
e
g
o
r
i
e
s

 
 
 
 
 
 
 
 
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
 
`
i
d
`
,
`
t
i
t
l
e
`
 
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
_
c
a
t
e
g
o
r
i
e
s
 
O
R
D
E
R
 
B
Y
 
t
i
t
l
e
 
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
_
H
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
_
H
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
)
.
'
<
b
r
/
>
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
R
O
P
E
R
T
Y
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
C
A
T
E
G
O
R
Y
'
.
(
i
n
t
)
 
$
r
-
>
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
r
-
>
t
i
t
l
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
r
/
>
'
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
y
 
c
a
t
e
g
o
r
i
e
s

 
 
 
 
 
 
 
 
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
 
`
i
d
`
,
`
t
i
t
l
e
`
 
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
r
o
p
e
r
t
y
_
c
a
t
e
g
o
r
i
e
s
 
O
R
D
E
R
 
B
Y
 
t
i
t
l
e
 
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
)
.
'
<
b
r
/
>
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
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
P
R
O
P
E
R
T
Y
_
C
A
T
E
G
O
R
Y
'
.
(
i
n
t
)
 
$
r
-
>
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
r
-
>
t
i
t
l
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
h
r
/
>
'
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
o
u
c
h
_
t
e
m
p
l
a
t
e
s
(
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

