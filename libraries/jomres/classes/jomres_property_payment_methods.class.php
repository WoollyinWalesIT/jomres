
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
p
a
y
m
e
n
t
_
m
e
t
h
o
d
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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
t
h
i
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


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
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
 
g
e
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
!
i
s
_
a
r
r
a
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
 
&
&
 
(
i
n
t
)
 
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
 
>
 
0
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
 
=
 
a
r
r
a
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
F
i
r
s
t
 
w
e
 
n
e
e
d
 
t
o
 
e
x
t
r
a
c
t
 
t
h
o
s
e
 
u
i
d
s
 
t
h
a
t
 
a
r
e
 
n
o
t
 
a
l
r
e
a
d
y
 
i
n
 
t
h
e
 
$
t
h
i
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
 
v
a
r
,
 
t
h
i
s
 
(
m
a
y
)
 
r
e
d
u
c
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
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
 
w
e
 
n
e
e
d
 
t
o
 
q
u
e
r
y

 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
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
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
i
d
,
 
$
t
h
i
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
r
r
a
y
[
 
]
 
=
 
$
i
d
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
e
m
p
_
a
r
r
a
y
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
e
m
p
_
a
r
r
a
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
 
i
d
,
p
r
i
d
,
p
l
u
g
i
n
 
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
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
s
e
t
t
i
n
g
 
=
 
'
a
c
t
i
v
e
'
 
A
N
D
 
v
a
l
u
e
 
=
 
'
1
'
 
A
N
D
 
p
r
i
d
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
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
.
'
)
 
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
D
a
t
a
 
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
D
a
t
a
 
a
s
 
$
d
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
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
3
1
0
8
'
,
 
$
d
a
t
a
-
>
p
l
u
g
i
n
,
 
n
u
l
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
g
a
t
e
w
a
y
d
i
r
 
=
 
$
r
e
s
u
l
t
[
 
'
f
i
l
e
p
a
t
h
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
d
i
r
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
,
 
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
,
 
$
t
m
p
g
a
t
e
w
a
y
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
a
t
e
w
a
y
d
i
r
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
\
\
'
,
 
'
/
'
,
 
$
g
a
t
e
w
a
y
d
i
r
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
[
 
$
d
a
t
a
-
>
p
r
i
d
 
]
[
$
d
a
t
a
-
>
p
l
u
g
i
n
]
[
'
g
a
t
e
w
a
y
'
]
 
=
 
$
d
a
t
a
-
>
p
l
u
g
i
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
[
 
$
d
a
t
a
-
>
p
r
i
d
 
]
[
$
d
a
t
a
-
>
p
l
u
g
i
n
]
[
'
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
'
]
 
=
 
$
r
e
s
u
l
t
[
 
'
g
a
t
e
w
a
y
n
a
m
e
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
[
 
$
d
a
t
a
-
>
p
r
i
d
 
]
[
$
d
a
t
a
-
>
p
l
u
g
i
n
]
[
'
g
a
t
e
w
a
y
_
i
m
a
g
e
'
]
 
=
 
$
g
a
t
e
w
a
y
d
i
r
.
'
j
0
0
5
1
0
'
.
$
d
a
t
a
-
>
p
l
u
g
i
n
.
'
.
g
i
f
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
s
o
m
e
 
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
 
d
o
n
`
t
 
h
a
v
e
 
g
a
t
e
w
a
y
s
 
e
n
a
b
l
e
d
,
 
s
o
 
w
e
`
l
l
 
s
e
t
 
$
t
h
i
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
 
t
o
 
'
'
 
f
o
r
 
t
h
e
m
,
 
o
t
h
e
r
w
i
s
e
 
t
h
e
 
m
y
s
q
l
 
q
u
e
r
y
 
w
i
l
l
 
b
e
 
e
x
e
c
u
t
e
d
 
a
g
a
i
n

 
 
 
 
 
 
 
 
 
 
 
 
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
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
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
[
$
u
i
d
]
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
[
 
$
u
i
d
 
]
[
'
X
X
X
'
]
 
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
t
h
i
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
[
 
$
u
i
d
 
]
[
'
X
X
X
'
]
[
'
g
a
t
e
w
a
y
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
[
 
$
u
i
d
 
]
[
'
X
X
X
'
]
[
'
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
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
[
 
$
u
i
d
 
]
[
'
X
X
X
'
]
[
'
g
a
t
e
w
a
y
_
i
m
a
g
e
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
g
a
t
e
w
a
y
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
t
h
i
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
t
h
i
s
-
>
g
e
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
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
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
;

 
 
 
 
}

}

