
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
1
c
o
n
f
i
r
m
a
t
i
o
n
_
l
e
t
t
e
r

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
e
m
a
i
l
_
t
y
p
e
 
=
 
'
e
m
a
i
l
_
g
u
e
s
t
_
c
o
n
f
i
r
m
a
t
i
o
n
l
e
t
t
e
r
'
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
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
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
c
o
n
t
r
a
c
t
_
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
s
e
n
d
e
m
a
i
l
 
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
s
e
n
d
e
m
a
i
l
'
,
 
0
)
;


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
j
o
m
r
e
s
_
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
e
m
a
i
l
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
n
d
e
m
a
i
l
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
(
$
c
o
n
t
r
a
c
t
_
u
i
d
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
,
 
$
p
r
i
n
t
 
=
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
(
$
c
o
n
t
r
a
c
t
_
u
i
d
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
,
 
$
p
r
i
n
t
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
_
e
m
a
i
l
(
$
e
m
a
i
l
_
t
y
p
e
,
 
$
c
o
n
t
r
a
c
t
_
u
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
n
d
e
m
a
i
l
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
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
E
M
A
I
L
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
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
N
A
M
E
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
M
A
I
L
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
o
d
e
 
=
 
1
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
a
t
t
a
c
h
m
e
n
t
s
'
]
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
c
o
n
f
i
r
m
a
t
i
o
n
 
l
e
t
t
e
r
 
t
o
 
g
u
e
s
t
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
d
a
t
a
[
$
c
o
n
t
r
a
c
t
_
u
i
d
]
[
'
E
M
A
I
L
'
]
.
'
 
S
u
b
j
e
c
t
 
'
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
s
u
b
j
e
c
t
'
]
.
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
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
R
M
A
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
_
S
E
N
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
R
M
A
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
_
S
E
N
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
 
$
b
o
o
k
i
n
g
_
e
m
a
i
l
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
p
a
r
s
e
d
_
e
m
a
i
l
[
'
t
e
x
t
'
]
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

