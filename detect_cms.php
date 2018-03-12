
<
?
p
h
p

/
*
*

 
*
 
D
e
t
e
c
t
 
t
h
e
 
h
o
s
t
 
C
M
S
 

 
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
.
J
R
D
S
.
'
w
p
-
c
o
n
f
i
g
.
p
h
p
'
)
)
 
{

 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
'
,
 
'
w
o
r
d
p
r
e
s
s
'
)
;

 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
'
,
 
J
O
M
R
E
S
_
C
M
S
S
P
E
C
I
F
I
C
_
A
B
S
P
A
T
H
.
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
.
J
R
D
S
)
;

}
 
e
l
s
e
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
.
J
R
D
S
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
c
m
s
'
.
J
R
D
S
.
'
v
e
r
s
i
o
n
'
.
J
R
D
S
.
'
v
e
r
s
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
P
A
T
H
_
P
L
A
T
F
O
R
M
'
)
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
P
A
T
H
_
P
L
A
T
F
O
R
M
'
,
 
1
)
;

 
 
 
 
}
 
/
/
 
J
o
o
m
l
a
 
3
.
3
.
1
 
u
s
e
s
 
t
h
i
s
 
i
n
s
t
e
a
d
 
o
f
 
J
E
X
E
C
.


 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
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
.
J
R
D
S
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
c
m
s
'
.
J
R
D
S
.
'
v
e
r
s
i
o
n
'
.
J
R
D
S
.
'
v
e
r
s
i
o
n
.
p
h
p
'
;


 
 
 
 
$
j
v
e
r
s
i
o
n
 
=
 
n
e
w
 
J
V
e
r
s
i
o
n
(
)
;

 
 
 
 
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
.
'
,
 
$
j
v
e
r
s
i
o
n
-
>
g
e
t
S
h
o
r
t
V
e
r
s
i
o
n
(
)
)
;

 
 
 
 
$
v
s
h
o
r
t
_
v
e
r
s
i
o
n
 
=
 
$
b
a
n
g
[
0
]
;


 
 
 
 
i
f
 
(
$
v
s
h
o
r
t
_
v
e
r
s
i
o
n
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
'
,
 
'
j
o
o
m
l
a
3
'
)
;

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
'
,
 
J
O
M
R
E
S
_
C
M
S
S
P
E
C
I
F
I
C
_
A
B
S
P
A
T
H
.
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
.
J
R
D
S
)
;

 
 
 
 
}

}
 
e
l
s
e
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
.
J
R
D
S
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
s
r
c
'
.
J
R
D
S
.
'
V
e
r
s
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
J
P
A
T
H
_
P
L
A
T
F
O
R
M
'
)
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
J
P
A
T
H
_
P
L
A
T
F
O
R
M
'
,
 
1
)
;

 
 
 
 
}


 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
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
.
J
R
D
S
.
'
l
i
b
r
a
r
i
e
s
'
.
J
R
D
S
.
'
s
r
c
'
.
J
R
D
S
.
'
V
e
r
s
i
o
n
.
p
h
p
'
;


 
 
 
 
$
j
v
e
r
s
i
o
n
 
=
 
n
e
w
 
J
o
o
m
l
a
\
C
M
S
\
V
e
r
s
i
o
n
(
)
;

 
 
 
 
i
f
 
(
$
j
v
e
r
s
i
o
n
:
:
M
A
J
O
R
_
V
E
R
S
I
O
N
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
'
,
 
'
j
o
o
m
l
a
3
'
)
;

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
'
,
 
J
O
M
R
E
S
_
C
M
S
S
P
E
C
I
F
I
C
_
A
B
S
P
A
T
H
.
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
.
J
R
D
S
)
;

 
 
 
 
}

 
 
 
 
i
f
 
(
$
j
v
e
r
s
i
o
n
:
:
M
A
J
O
R
_
V
E
R
S
I
O
N
 
=
=
 
'
4
'
)
 
{

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
'
,
 
'
j
o
o
m
l
a
4
'
)
;

 
 
 
 
 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
'
,
 
J
O
M
R
E
S
_
C
M
S
S
P
E
C
I
F
I
C
_
A
B
S
P
A
T
H
.
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
.
J
R
D
S
)
;

 
 
 
 
}
 

}




i
f
 
(
!
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
D
E
T
E
C
T
E
D
_
C
M
S
'
)
)
 
{

 
 
 
 
$
j
r
e
P
a
t
h
 
=
 
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
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

 
 
 
 
$
d
 
=
 
@
d
i
r
(
$
j
r
e
P
a
t
h
)
;

 
 
 
 
$
d
o
c
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

 
 
 
 
i
f
 
(
$
d
)
 
{

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
s
[
 
]
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
d
-
>
c
l
o
s
e
(
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
d
o
c
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
o
r
t
(
$
d
o
c
s
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
d
o
c
s
 
a
s
 
$
d
o
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
s
t
d
i
r
 
=
 
$
j
r
e
P
a
t
h
.
$
d
o
c
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
r
 
=
 
@
d
i
r
(
$
l
i
s
t
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
r
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
n
a
m
e
 
=
=
 
'
d
e
t
e
c
t
_
c
m
s
.
p
h
p
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
$
j
r
e
P
a
t
h
.
'
d
e
t
e
c
t
_
c
m
s
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
r
-
>
c
l
o
s
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}


i
f
 
(
!
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
D
E
T
E
C
T
E
D
_
C
M
S
'
)
)
 
{

 
 
 
 
d
e
f
i
n
e
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
D
E
T
E
C
T
E
D
_
C
M
S
'
,
 
'
u
n
k
n
o
w
n
'
)
;

}


i
f
 
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
=
=
 
'
u
n
k
n
o
w
n
'
)
 
{

 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
"
E
r
r
o
r
,
 
c
a
n
n
o
t
 
d
e
t
e
c
t
 
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
 
C
M
S
.
<
b
r
/
>
 
 
I
t
 
i
s
 
p
o
s
s
i
b
l
e
 
t
h
a
t
 
y
o
u
 
h
a
v
e
 
u
p
g
r
a
d
e
d
 
y
o
u
r
 
C
M
S
'
s
 
v
e
r
s
i
o
n
 
a
n
d
 
t
h
e
 
v
e
r
s
i
o
n
 
o
f
 
J
o
m
r
e
s
 
y
o
u
'
r
e
 
r
u
n
n
i
n
g
 
i
s
n
'
t
 
a
w
a
r
e
 
o
f
 
t
h
e
 
n
e
w
 
v
e
r
s
i
o
n
 
o
f
 
t
h
e
 
C
M
S
.
 
I
f
 
t
h
a
t
'
s
 
t
h
e
 
c
a
s
e
 
t
h
e
n
 
y
o
u
 
w
i
l
l
 
n
e
e
d
 
t
o
 
u
p
g
r
a
d
e
 
J
o
m
r
e
s
 
t
o
o
,
 
h
o
w
e
v
e
r
 
b
e
f
o
r
e
 
y
o
u
 
d
o
 
p
l
e
a
s
e
 
<
a
 
h
r
e
f
=
'
h
t
t
p
:
/
/
w
w
w
.
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
/
m
a
n
u
a
l
/
i
n
s
t
a
l
l
a
t
i
o
n
-
a
n
d
-
u
p
g
r
a
d
i
n
g
/
1
1
-
u
p
g
r
a
d
i
n
g
'
>
s
e
e
 
t
h
i
s
 
p
a
g
e
.
<
/
a
>
"
;


 
 
 
 
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
$
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

