
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
5
l
i
s
t
_
g
a
t
e
w
a
y
s
_
f
o
r
_
i
n
v
o
i
c
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
$
i
n
v
o
i
c
e
_
i
d
 
=
 
n
u
l
l
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


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
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
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
$
i
n
v
o
i
c
e
_
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
 
=
 
i
n
t
v
a
l
(
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
i
n
v
o
i
c
e
_
i
d
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
 
=
=
 
0
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


 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
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
b
a
s
i
c
_
i
n
v
o
i
c
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

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
g
a
t
h
e
r
D
a
t
a
(
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
 
!
=
 
$
i
n
v
o
i
c
e
-
>
c
m
s
_
u
s
e
r
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
U
s
e
r
 
'
.
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
n
a
m
e
.
'
 
i
s
 
n
o
t
 
a
u
t
h
o
r
i
s
e
d
 
t
o
 
v
i
e
w
 
i
n
v
o
i
c
e
 
i
d
 
'
.
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
"
g
a
t
e
w
a
y
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
"
)
;

 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
 
=
 
n
e
w
 
g
a
t
e
w
a
y
_
p
l
u
g
i
n
_
s
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
e
t
_
s
e
t
t
i
n
g
s
_
f
o
r
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
u
i
d
(
 
$
i
n
v
o
i
c
e
-
>
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
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
-
>
g
a
t
e
w
a
y
_
s
e
t
t
i
n
g
s
 
a
s
 
$
g
a
t
e
w
a
y
_
n
a
m
e
 
=
>
 
$
s
e
t
t
i
n
g
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
(
b
o
o
l
)
$
s
e
t
t
i
n
g
s
 
[
'
b
a
l
a
n
c
e
_
p
a
y
m
e
n
t
s
_
s
u
p
p
o
r
t
e
d
'
]
 
=
=
 
t
r
u
e
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
s
e
t
t
i
n
g
s
[
'
a
c
t
i
v
e
'
]
)
 
&
&
 
$
s
e
t
t
i
n
g
s
[
'
a
c
t
i
v
e
'
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
r
[
'
F
R
I
E
N
D
L
Y
N
A
M
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
G
A
T
E
W
A
Y
N
A
M
E
'
.
$
g
a
t
e
w
a
y
_
n
a
m
e
,
$
g
a
t
e
w
a
y
_
n
a
m
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
I
M
A
G
E
'
]
 
=
 
$
s
e
t
t
i
n
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
_
l
i
n
k
s
'
]
 
[
'
b
u
t
t
o
n
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
L
I
N
K
'
]
 
=
 
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
i
n
v
o
i
c
e
_
p
a
y
m
e
n
t
_
s
e
n
d
&
g
a
t
e
w
a
y
=
'
.
$
g
a
t
e
w
a
y
_
n
a
m
e
.
'
&
i
n
v
o
i
c
e
_
i
d
=
'
.
$
t
h
i
s
-
>
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
P
A
Y
N
O
W
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
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
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
o
w
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
A
G
E
T
I
T
L
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
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
B
O
O
K
I
N
G
_
C
H
O
O
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
C
O
M
_
A
_
G
A
T
E
W
A
Y
_
B
O
O
K
I
N
G
_
C
H
O
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
;


 
 
 
 
 
 
 
 
 
 
 
 
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
l
i
s
t
_
g
a
t
e
w
a
y
s
_
f
o
r
_
i
n
v
o
i
c
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
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
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
_
R
E
Q
U
E
S
T
[
'
i
n
v
o
i
c
e
_
i
d
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
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
 
"
<
p
 
c
l
a
s
s
=
'
a
l
e
r
t
 
a
l
e
r
t
-
d
a
n
g
e
r
'
>
E
r
r
o
r
,
 
n
o
 
g
a
t
e
w
a
y
s
 
h
a
v
e
 
b
e
e
n
 
c
o
n
f
i
g
u
r
e
d
.
<
/
p
>
"
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

